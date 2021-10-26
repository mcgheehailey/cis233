







<label class="form-lable" for="first_name">Fist Name</label>
<input class="form-input" type="text" name="first_name" id="first_name" value="{{old('first_name', $friend->first_name)}}">
<label class="form-lable" for="last_name">Last Name</label>
<input class="form-input" type="text" name="last_name" id="last_name" value="{{old('last_name', $friend->last_name)}}">
<label class="form-lable" for="age">Age</label>
<select class="form-select" name="age">
@foreach (range(18, 100) as $ageOption)
    <option value="{{$ageOption}}"  {{in_array($ageOption, [$friend->age, old('age')])  ? 'selected' : '' }} > {{$ageOption}} <option>
@endforeach
</select>