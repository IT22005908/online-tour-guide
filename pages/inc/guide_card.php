
<?php
$query = 'SELECT * FROM tourguide';
$resultq = mysqli_query($conn,$query);
$guides = mysqli_fetch_all($resultq,MYSQLI_ASSOC);




function createGuide($name,$rating,$guide_img_path,$guide_descrip)
{
    $icon_guide_path ="../images/elements/guide_indicator.jpg";
    echo '
            <div class="container-guide-card">
                <div class="guide-top-sec">
                    <img src='.$icon_guide_path.' id="guide-icon">
                    <h4>'.$name.'</h4>
                </div>
                <div class="guide-mid-sec">
                 <div class="guide-pic-sec">
                        <img src='.$guide_img_path.' id="guide-pic">
                    </div>
                    <div class="guide-desc-sec">
                        <h3>Description</h3>
                        <p id="guide-desc">'.$guide_descrip.'</p>
                    </div>
                </div>
                <div class="guide-bottom-sec">
                    <h2>'.$rating.'</h2>
                    <button>View</button>
                </div>
            </div>';
}


function defaultGuides($n)
{
    for($i=0;$i<$n;$i++)
    {
        createGuide("Benjamin",10,"../images/guides/guide_default.jpg","Man ekkan yanawa witharai");
    }
}


function showAGuide($gd)
{
    $guide_img= $gd['pic_link'];
    createGuide($gd['firstName'],"NA",$guide_img,$gd['description']);
}


function showAllGuides($guides_arry)
{
    if($guides_arry ==null)
    {
        return;
    }
    foreach($guides_arry as $guide)
     {
        showAGuide($guide);
     }
}

?>