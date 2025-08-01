<?php
// PHP가 작동하는 경우 즉시 리다이렉트
if (function_exists('header')) {
    header('Location: ./pages/web/main/index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>구독닷컴 디자인페이지</title>
    <style>
        body {
            font-family: "Pretendard Variable";
            text-align: center;
            padding: 50px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        .loading {
            color: #666;
            margin: 20px 0;
        }
        .link {
            color: #23B16C;
            text-decoration: none;
            font-weight: bold;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>구독닷컴</h1>
        <div class="loading">페이지로 이동 중...</div>
        <p>자동으로 이동되지 않는 경우 <a href="./pages/web/main/index.php" class="link">여기를 클릭</a>하세요.</p>
    </div>
    
    <script>
        // JavaScript를 통한 리다이렉트
        setTimeout(function() {
            window.location.replace('./pages/web/main/index.php');
        }, 1000);
    </script>
</body>
</html>