<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?= $user["login"] ?></title>
    <link rel="stylesheet" href="style/profile.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Poppins:wght@500&family=Quintessential&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="profile">
        <h1>Profile</h1>
        <img src="<?= $user["avatar_url"] ?>"></img>
        <div class="info">
            <div>
                <h2>Username : <?= $user["login"] ?></h2>
                <h2>Bio : <?= $user["bio"] ?></h2>
            </div>
            <div>
                <h2>Repositórios : <?= $user["public_repos"] ?></h2>
                <h2>País : <?= $user["location"] ?></h2>
            </div>
        </div>
    </div>
    <div class="repos">
        <h1>Repositórios</h1>
        <?php foreach ($repos as $rps):?>
        <div class="rps">
            <h3><?= $rps['name'] ?></h3>
            <h4><?= $rps['description'] ?></h4>
            <a href="<?= $rps['html_url'] ?>"><?= $rps['html_url'] ?></a>
        </div>
        <?php endforeach ?>
    </div>
</body>

</html>