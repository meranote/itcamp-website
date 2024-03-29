<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Class FormService<br>
 * Form field formatting and checking services<br>
 * <b>This service only performs formatting and checking for form field</b>
 * @package App\Services
 * @see QuestionService for create, manage and store applicant or camp questions
 */
class FormService
{

    /**
     * Accept field lists
     */
    const ACCEPTS_FIELD = ['TEXT', 'TEXTAREA', 'PASSWORD', 'EMAIL', 'NUMBER', 'DATE', 'RADIO', 'CHECKBOX', 'SELECT', 'SELECT_MULTIPLE', 'FILE'];

    /**
     * Check if field type is accepted
     * @param string $type
     * @return bool
     */
    public function checkFieldTypeAccepted($type)
    {
        return in_array($type, self::ACCEPTS_FIELD);
    }

    /**
     * Get available field type
     * @return array
     */
    public function getAvailableFieldType()
    {
        return self::ACCEPTS_FIELD;
    }

    #region setting field

    /**
     * For DATE, EMAIL, NUMBER, PASSWORD, TEXT, TEXTAREA field
     * @param array $arrayObject
     * @return bool
     */
    private function checkTextSettingFormat($arrayObject) {
        return !sizeof($arrayObject);
    }

    /**
     * For CHECKBOX, RADIO, SELECT, SELECT_MULTIPLE setting field
     * @param array $arrayObject
     * @return bool
     */
    private function checkListSettingFormat($arrayObject) {
        if(sizeof($arrayObject) == 1 && array_key_exists("lists", $arrayObject) && gettype($arrayObject['lists']) == 'array') {
            foreach($arrayObject['lists'] as $option) {
                if(!(sizeof($option) == 2 && array_key_exists("key", $option) && gettype($option['key']) == 'string'
                    && array_key_exists("text", $option) && gettype($option['text']) == 'string')) {
                    return false;
                }
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * For FILE setting field
     * @param $arrayObject
     * @return bool
     */
    private function checkFileSettingFormat($arrayObject) {
        if(sizeof($arrayObject) == 2 && array_key_exists("directory", $arrayObject) && gettype($arrayObject['directory']) == 'string'
            && array_key_exists("acceptTypes", $arrayObject) && gettype($arrayObject['acceptTypes']) == 'string') {
            if(in_array($arrayObject['acceptTypes'], FileService::ACCEPTS_FILE_TYPE)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check the setting's type format correction of given JSON Object (array)
     * @param $type
     * @param mixed $json
     * @return bool
     * @throws \Exception
     */
    public function checkSettingFormat($type, $json) {
        if(gettype($json) == 'string') {
            // If json is string, construct the object
            if(gettype(json_decode($json, True)) == 'array') {
                $json = json_decode($json, True);
            } else {
                // Can't convert json to array (object), invalid format
                return false;
            }
        } else if(gettype($json) != 'array') {
            // If json not a string or array, invalid format
            return false;
        }

        switch ($type) {
            case 'CHECKBOX':
            case 'RADIO':
            case 'SELECT':
            case 'SELECT_MULTIPLE': return $this->checkListSettingFormat($json);
            case 'FILE': return $this->checkFileSettingFormat($json);
            case 'DATE':
            case 'EMAIL':
            case 'NUMBER':
            case 'PASSWORD':
            case 'TEXT':
            case 'TEXTAREA':
            default: return $this->checkTextSettingFormat($json);
        }
    }

    #endregion

    #region value field

    /**
     * For DATE value field
     * @param array $arrayObject
     * @return bool
     */
    private function checkDateValueFormat($arrayObject) {
        if(sizeof($arrayObject) == 2 && array_key_exists("value", $arrayObject) && gettype($arrayObject["value"]) == "string") {
            if(preg_match("/^[0-9]{2}/[0-9]{2}/[0-9]{4}$/", $arrayObject['value'])) {
                return true;
            }
            return false;
        } else {
            return false;
        }
    }

    /**
     * For EMAIL, NUMBER, PASSWORD, TEXT, TEXTAREA value field
     * @param array $arrayObject
     * @return bool
     */
    private function checkTextValueFormat($arrayObject) {
        if(sizeof($arrayObject) == 1 && array_key_exists("value", $arrayObject) && gettype($arrayObject["value"]) == "string") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * For CHECKBOX, SELECT_MULTIPLE value field
     * @param array $arrayObject
     * @return bool
     */
    private function checkMultipleListValueFormat($arrayObject) {
        if(sizeof($arrayObject) == 1 && array_key_exists("value", $arrayObject) && gettype($arrayObject["value"]) == "array") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * For RADIO, SELECT value field
     * @param array $arrayObject
     * @return bool
     */
    private function checkSingleListValueFormat($arrayObject) {
        return $this->checkTextValueFormat($arrayObject);
    }

    /**
     * For FILE value field
     * @param $arrayObject
     * @return bool
     */
    private function checkFileValueFormat($arrayObject) {
        if(sizeof($arrayObject) == 1 && array_key_exists("value", $arrayObject) && gettype($arrayObject["value"]) == "string") {
            return true;
        }

        return false;
    }

    /**
     * Check the value's type format correction of given JSON Object (array)
     * @param $type
     * @param mixed $json
     * @return bool
     * @throws \Exception
     */
    public function checkValueFormat($type, $json) {
        if(gettype($json) == 'string') {
            // If json is string, construct the object
            if(gettype(json_decode($json, True)) == 'array') {
                $json = json_decode($json, True);
            } else {
                // Can't convert json to array (object), invalid format
                return false;
            }
        } else if(gettype($json) != 'array') {
            // If json not a string or array, invalid format
            return false;
        }

        switch ($type) {
            case 'CHECKBOX':
            case 'SELECT_MULTIPLE': return $this->checkMultipleListValueFormat($json);
            case 'RADIO':
            case 'SELECT': return $this->checkSingleListValueFormat($json);
            case 'FILE': return $this->checkFileValueFormat($json);
            case 'DATE': return $this->checkDateValueFormat($json);
            case 'EMAIL':
            case 'NUMBER':
            case 'PASSWORD':
            case 'TEXT':
            case 'TEXTAREA':
            default: return $this->checkTextValueFormat($json);
        }
    }

    /**
     * Format given value to target field type
     * @param $type
     * @param $value
     * @return string
     */
    public function formatValue($type, $value) {
        $json = '';

        if(in_array($type, ['EMAIL', 'FILE', 'NUMBER', 'PASSWORD', 'TEXT', 'TEXTAREA'])) {
            $json = '{"value": "'.$value.'"}';
        } else if(in_array($type, ['DATE'])) {
            $json = '{"value": "'.$value.'"}';
        } else if(in_array($type, ['RADIO', 'SELECT'])) {
            $json = '{"value": "'.$value.'"}';
        } else if(in_array($type, ['CHECKBOX', 'SELECT_MULTIPLE'])) {
            $flag = false;
            $json = '{"value": [';
            foreach($value as $item) {
                if(!$flag) {
                    $json .= '"'.$item.'"';
                    $flag = true;
                } else {
                    $json .= ', "'.$item.'"';
                }

            }
            $json .= ']}';
        }

        return $json;
    }

    #endregion

}