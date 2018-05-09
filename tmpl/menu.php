<?php
$user = JFactory::getUser();
if($user->id) {
    $cover = modtravelHelper::getUserImage();
    $logged = true;
}
else
    $logged = false;
?>

<?php
if($logged){ ?>
    <ul class="menu pull-right">
        <li>
            <img width="35px" class="img-rounded" src="<?php echo "/images/storage/_profile/big/".$cover; ?>">
        </li>
        <li>
            <i class="add fa fa-plus-square fa-2x" aria-hidden="true"></i>
        </li>
        <li>
            <i class="logout fa fa-sign-out fa-1x" aria-hidden="true"></i>
        </li>

    </ul>
<?php } else { ?>
    <ul class="menu pull-right">
        <li>
            <a href="/login">ACCEDI</a>
        </li>
    </ul>
<?php } ?>


