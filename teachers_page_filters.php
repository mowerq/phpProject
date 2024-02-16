<?php
$data = [];
include_once("connection.php");
include_once("website_settings.php");

    session_start();
    $_SESSION["teachersPageNumber"] = $_GET['teachersPageNumber'];
    $getTeachersQuery = $databaseConnection->prepare("SELECT * FROM teachers ORDER BY " . $_SESSION["orderby"] . " LIMIT " . (($_SESSION["teachersPageNumber"] - 1) * $displayTeachersPerPage) . "," . $displayTeachersPerPage);
    $getTeachersQuery->execute();
    $teachersData = $getTeachersQuery->fetchAll(PDO::FETCH_ASSOC);
    $innerHtml = '';
    if (count($teachersData) > 0) {
        foreach ($teachersData as $aTeacher) {
            $ratingClass = '';
            if ($aTeacher["star_rating"] < 3) {
                $ratingClass = 'low';
            } elseif ($aTeacher["star_rating"] < 4) {
                $ratingClass = 'mid';
            } else {
                $ratingClass = 'high';
            }
    
            $innerHtml .= '
            <div class="col-lg-4 col-md-6">
                <a href="#" class="listing-item-container compact">
                    <div class="listing-item">
                        <img src="' . $aTeacher["image_url"] . '" alt="Teachers image">
                        <div class="listing-item-content">
                            <div class="numerical-rating ' . $ratingClass . '" data-rating="' . $aTeacher["star_rating"] . '"></div>
                            <h3>' . $aTeacher["name"] . '<i class="verified-icon"></i></h3>
                            <span>' . $_SESSION["allCategories"][$aTeacher["category"] - 1]["category_name"] . '</span>
                        </div>
                        <span class="like-icon"></span>
                    </div>
                </a>
            </div>';
        }
    } else {
        $innerHtml = "Maalesef böyle bir öğretmen bulunamadı :(";
    }
    echo json_encode($data['innerHtml'] = $innerHtml);

     

/*
    $data["innerhtml"] = "<div class="col-lg-4 col-md-6">
    <a href="#" class="listing-item-container compact">
        <div class="listing-item">
        <img src=<?php echo $aTeacher["image_url"] ?> alt="Teachers image">
        <div class="listing-item-content">
            <div class="numerical-rating" data-rating=<?php echo $aTeacher["star_rating"] ?>></div>
            <h3>
            <?php echo $aTeacher["name"]?>
            <i class="verified-icon"></i>
            </h3>
            <span><?php echo $aTeacher["category"] ?></span>
        </div>
        <span class="like-icon"></span>
        </div>
    </a>
</div>"*/
?>