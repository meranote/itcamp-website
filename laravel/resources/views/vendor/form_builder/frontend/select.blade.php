<div class="form-group {{ $field_class }}">
    <label class="form-control-label" for="{{ $field_id }}">@if(!$hideTitle){{ $title }}<span class="text-danger">@if($require)*@endif</span>@else&nbsp;@endif</label>

    <select class="form-control" id="{{ $field_id }}" name="{{ $field_id }}" {{ $require ? 'required' : '' }}>
        <option value="null" selected disabled>{{ $title }}</option>
        @foreach($lists as $item)
            <option value="{{ $item['key'] }}" {{ $item['key'] == old($field_id) ? 'selected' : '' }}>{{ $item['text'] }}</option>
        @endforeach
    </select>
    <small class="form-text text-muted">{!! $description !!}</small>
</div>