<label class="form-lable" for="name">Name</label>
        <input class="form-input" type="text" name="name" id="name" value="{{old('name', $user->name)}}">
        <label class="form-lable" for="email">Email</label>
        <input class="form-input" type="text" name="email" id="email" value="{{old('email', $user->email)}}">
        <label class="form-lable" for="password">Password</label>
        <input class="form-input" type="text" name="password" id="password" value="{{old('password', $user->password)}}">