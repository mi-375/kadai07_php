<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📝 にっこり記録アプリ</title>

    <!-- アイコン読み込み -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<head>
    <meta charset="utf-8">
    <title>にっこり記録
    </title>
    <link rel="stylesheet" href="css/style.css">
</head>


    <!-- メインコンテンツ -->
    <main class="main-container form-page">
        <div class="form-card">
            <h1 class="form-title">にっこり記録</h1>
            <p class="form-subtitle">誰かのおかげでにっこりしたことを記録しましょう☺︎</p>
            
            <form method="post" action="insert.php">
                <div class="form-group">
                    <label for="name" class="form-label">
                        <i class="fas fa-user"></i> 自分の名前
                    </label>
                    <input type="text" id="name" name="name" class="form-input" placeholder="例：くまこ" required>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">
                        <i class="fas fa-user"></i> 相手の名前
                    </label>
                    <input type="text" id="name2" name="name2" class="form-input" placeholder="例：くまみ" required>
                </div>

                <div class="form-group">
                    <label for="content" class="form-label">
                        <i class="fas fa-comment"></i> にっこりしたこと
                    </label>
                    <textarea id="content" name="content" class="form-textarea" placeholder="例：〇〇をしてくれた、〇〇と言ってもらえた☺︎" required></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-pen"></i>
                    記録する
                </button>
            </form>
        </div>
    </main>
</body>

</html>