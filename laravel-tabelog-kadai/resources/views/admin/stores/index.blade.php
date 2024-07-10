<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>店舗一覧</title>
</head>
<body>
    <h1>店舗一覧</h1>
    <table class="table">
        <thead>
            <tr>
                <th>名前</th>
                <th>画像</th>
                <th>店舗説明</th>
                <th>営業時間</th>
                <th>価格</th>
                <th>カテゴリID</th>
                <th>郵便番号</th>
                <th>住所</th>
                <th>電話番号</th>
                <th>定休日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->image}}</td>
                    <td>{{ $store->description}}</td>
                    <td>{{ $store->business_hours}}</td>
                    <td>{{ $store->price}}</td>
                    <td>{{ $store->category_id}}</td>
                    <td>{{ $store->postal_code}}</td>
                    <td>{{ $store->address }}</td>
                    <td>{{ $store->phone_number }}</td>
                    <td>{{ $store->regular_holiday}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
