<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>admin-login</title>
</head>
<body>
    <a href="{{route('admin.stores')}}">店舗一覧</a>
    <div class="col container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-10 col-lg-11">
                <div class="row row-cols-md-3 row-cols-2 g-3 mb-5">
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h5 class="card-title">総会員数</h5>
                                <p class="card-text">--名</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h5 class="card-title">無料会員数</h5>
                                <p class="card-text">--名</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h5 class="card-title">有料会員数</h5>
                                <p class="card-text">--名</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h5 class="card-title">店舗数</h5>
                                <p class="card-text">--件</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h5 class="card-title">総予約数</h5>
                                <p class="card-text">--件</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h5 class="card-title">月間売上</h5>
                                <p class="card-text">--円</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>