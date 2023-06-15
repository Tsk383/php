<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvファイル書き込み型アンケート（入力画面）</title>
</head>

<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>csvファイル書き込み型アンケート（入力画面）</legend>
      <a href="read.php">一覧画面</a>
      <div>
        name: <input type="text" name="name">
      </div>
      <div>
        email: <input type="email" name="email">
      </div>
      <div>
        映画はどこで観る派？<br>
        <input type="radio"  name="movie_place" value="映画館">映画館
        <input type="radio"  name="movie_place" value="家">家
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>