<h1>Dang ki</h1>
<form action="{{ route('admin.doRegister') }}" method="POST">
	@csrf
	Name: <input type="text" name="name"><br>
	Email: <input type="text" name="email"><br>
	Password: <input type="password" name="password"><br>
	Avatar: <input type="file" name="avatar"><br>
	BirthDay: <input type="date" name="birth_day"><br>
	Address: <input type="text" name="address"><br>
	Phone Number: <input type="text" name="phone_number"><br>
	<input type="submit" value="Dang ki">
</form>