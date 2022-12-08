<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
      body{
          background-color: #647364;
          color: #fff;
          text-align: center;
          padding: 100px 0 0 0;
      }
      form{
          align-items: center;
          display: flex; 
          flex-flow:column;
          gap: 10px;
          padding: 20px 0 0 0;
          font-size: 20px;
      }
      ::placeholder, select, input,
      select:focus, input:focus {
          color: #fff;
          background: #647364;
          border: 2px solid #fff;
          font-size: 15px;
      }
      input,select{
          min-width: 300px;
          height: 100%;
      }
    </style>   

</head>
<body>
    <h1>Авторизация</h1>
<form action="/loginresult">
	<input name="login" placeholder="Логин">
	<input name="password" placeholder="Лароль">
	<input type="submit" class="button">
</form>
</body>
</html>