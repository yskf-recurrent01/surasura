<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配列の練習</title>
    <style>
        table{
            background-color: #999;
        }
        table tbody th,
        table tbody td{
            background-color: #fff;
        }
    </style>
</head>

<body>
    <h1>配列の練習</h1>
    <?php
    $team_a = [
        1 => [
            "name" => "江原",
            "role" => "ディレクター"
        ],
        2 => [
            "name" => "福永",
            "role" => "デザイナー"
        ],
        3 => [
            "name" => "村田",
            "role" => "プログラマー"
        ],
        4 => [
            "name" => "松永",
            "role" => "フロントエンドエンジニア"
        ],
    ];
    $team_b = [
        1 => [
            "name" => "梅崎",
            "role" => "ディレクター"
        ],
        2 => [
            "name" => "大古場",
            "role" => "デザイナー"
        ],
        3 => [
            "name" => "小池",
            "role" => "プログラマー"
        ],
        4 => [
            "name" => "小倉",
            "role" => "フロントエンドエンジニア"
        ],
    ];
    $team_c = [
        1 => [
            "name" => "兵藤",
            "role" => "ディレクター"
        ],
        2 => [
            "name" => "松原",
            "role" => "デザイナー"
        ],
        3 => [
            "name" => "松浦",
            "role" => "プログラマー"
        ],
        4 => [
            "name" => "永田",
            "role" => "フロントエンドエンジニア"
        ],
    ];
    $team_d = [
        1 => [
            "name" => "岸本",
            "role" => "ディレクター"
        ],
        2 => [
            "name" => "環",
            "role" => "デザイナー"
        ],
        3 => [
            "name" => "小松",
            "role" => "プログラマー"
        ],
        4 => [
            "name" => "横田",
            "role" => "フロントエンドエンジニア"
        ],
    ];

    $room_6c = [
        "A" => $team_a,
        "B" => $team_b,
        "C" => $team_c,
        "D" => $team_d,
    ];

    echo "<pre>";
    var_dump($room_6c);
    echo "</pre>";

    ?>
    <?php
    // 1．$room_6cのみを使って「岸本」と段落で表示
    ?>
    <p><?php echo $room_6c["D"][1]["name"]; ?></p>

    <?php
    // 2．$room_6cのみを使ってBチームに所属する人の名前を箇条書きで表示 
    ?>
    <ul>
        <?php foreach ($room_6c["B"] as $member): ?>
            <li> <?php echo $member["name"]; ?> </li>
        <?php endforeach; ?>
    </ul>

    <?php
    // 3．$room_6cのみを使ってAチームのメンバー情報を説明リストで表示
    /* 
        <dl>
            <dt>江原</dt>
            <dd>ディレクター</dd>
            <dt>福永</dt>
            <dd>デザイナー</dd>
            ...
        </dl>
    */
    ?>

    <?php
    // 4．$room_6cのみを使って全チームの中からプログラマーの人の名前のみを箇条書きで表示
    ?>

    <?php
    // 5．$room_6cのみを使って全員をテーブルで表示
    /* 
        <table>
            <thead>
                <tr>
                    <th>チーム名</th><th>名前</th><th>役割</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    ....
                </tr>
            </tbody>
        </table>
    */
    ?>
    <table>
        <thead>
            <th>チーム名</th>
            <th>名前</th>
            <th>役割</th>
        </thead>
        <tbody>
            <?php foreach ($room_6c as $team_name => $team): ?>
                <?php foreach ($team as $member): ?>
                    <tr>
                        <td><?php echo $team_name ?></td>
                        <td><?php echo $member["name"] ?></td>
                        <td><?php echo $member["role"] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>