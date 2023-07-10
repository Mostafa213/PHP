{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Applicant Login
{/block}

{block name="style"}
    <link rel="stylesheet" href="css/callback.css">
{/block}

{block name="body"}
    <div class="container" >
        <div class="column">
                <h5>Name</h5>
                </div>
        <div class="column">
                <h5> {$profileObject['localizedFirstName']}   {$profileObject['localizedLastName']} </h5>
                </div>
        <div class="column">
                <h5>User Name</h5>
                </div>
        <div class="column">
                <h5> {$emailObject['elements'][0]['handle~']['emailAddress']} </h5>
                </div>
        <div class="column">
                <h5>Password</h5>
                </div>
        <div class="column">
                <h5> {$profileObject['id']} </h5>
                </div>
        <div class="column">
                <h5>Email</h5>
                </div>
        <div class="column">
                <h5> {$emailObject['elements'][0]['handle~']['emailAddress']} </h5>
                </div>
        <a href="applicant.php?page=home" class="btn btn-primary btn-block">Applicant page</a>
        </div>
{/block}