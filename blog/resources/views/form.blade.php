<form action="/insert" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputRollNumber">Roll Number</label>
        <input type="text" class="form-control" id="inputRollNumber" name="inputRollNumber" placeholder="Roll number">
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Address">
    </div>
    <div class="form-group">
        <label for="inputBirthday">Birthday</label>
        <input type="date" class="form-control" id="inputBirthday" name="inputBirthday" placeholder="Birthday">
    </div>
    <div class="form-group">
        <label for="inputPhone">Phone</label>
        <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Phone">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAvatar">Avatar</label>
            <input type="text" class="form-control" id="inputAvatar" name="inputAvatar" placeholder="Enter url">
        </div>
        <div class="form-group col-md-4">
            <label for="inputGender">Gender</label>
            <select id="inputGender" class="form-control" name="inputGender">
                <option selected>Choose</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputStatus">Status</label>
            <input value="1" type="text" class="form-control" id="inputStatus" name="inputStatus">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    {{ csrf_field() }}
</form>