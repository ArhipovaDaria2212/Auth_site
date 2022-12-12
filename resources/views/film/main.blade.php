<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <style>
      body{
          /* background-color: #647364; */
          color: #204B20;
          text-align: center;
          align-items: center;
          padding: 50px 0 0px 0;
          margin-bottom: 50px;
          word-wrap: break-word;
          background: #DAE1DA;
      }
      h1{
        padding: 0 0 50px 0; 
          color: #4E564E;
          font-size: 70px;
          text-align:center;
      }
      .film {
            color: #fff;
            max-width: 400px;
            background: #647364;
            padding: 20px;
            border: 5px solid #A7B9A7;
            border-radius: 10px;
            place-items: center;
            text-align: center;
      }
      .films {
        
            display: grid;
            gap: 20px;
            /* ! */
            grid-template-columns: 1fr 1fr 1fr;
            column-gap:  50px;
             row-gap:  50px;
             justify-items: center;
        }
        .list{
            text-align: center;
            font-size: 20px;
            margin-top: 30px;
        }
        a{
            padding-right: 5px;
            text-decoration: none;
            color: #204B20;
        }
        svg {
            display: none;
        }
        img {
            width: 250px;
            height: 250px;
        }
        .top .hidden {
            display: none;
        }
        .top {
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Films</h1>
    <div class="list top">{{ $films->links() }}</div>
    <div class="films">
    @foreach($films as $film)
        <div class="film">
            <h2>{{$film->title}}</h2>
            <p>{{$film->desc}}</p>
            <p>Дата создания: {{$film->created_at}}</p>
            <!-- <p>Продюсер: {{$film->director}}</p> -->
            <img src="./1.jpg" alt="">
        </div>
    @endforeach
    </div>
    <div class="list bottom">{{ $films->links() }}</div>
</body>
</html>


