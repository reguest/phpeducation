<?php include "template/header.php";



$diL = $_SESSION['dil'];

?>





<!-- main -->

<main>



    <!-- introSlider -->

    <?php include "template/slider.php"; ?>





    <!-- mostPostsBlock -->

    <section class="mostPostsBlock bgWhite">

        <div class="container">

            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom"><?= $dil['projects'] ?></span>



            </h1>

            <div class="row">



                <?php





                $siteBilgi = $baglanti->db->prepare("SELECT * from projects where project_id=?");

                $siteBilgi->execute(array("11"));

                $bilgiCek = $siteBilgi->fetch();

                //--



                $project2 = $baglanti->db->prepare("SELECT * from projects where project_id=?");

                $project2->execute(array("12"));

                $project2Cek = $project2->fetch();



                $project3 = $baglanti->db->prepare("SELECT * from projects where project_id=?");

                $project3->execute(array("13"));

                $project3Cek = $project3->fetch();





                $project4 = $baglanti->db->prepare("SELECT * from projects where project_id=?");

                $project4->execute(array("14"));

                $project4Cek = $project4->fetch();





                ?>

                <div class="col-xs-12 col-sm-6">
                    <!-- visualPostColumn -->
                    <a href="projectDetail.php?id=<?= $bilgiCek['project_id'] ?>" class="visualPostColumn hasOver elemenBlock text-center type01 textWhite">
                        <span class="bgCover elemenBlock" style="background-image: url(images/projects/<?= $bilgiCek['project_image'] ?>);"></span>
                        <div class="captionWrap">
                            <h2 class="fontNeuron"><?php if ($diL == "tr") {
                                                        echo $bilgiCek['project_title'];
                                                    }
                                                    if ($diL == "en") {
                                                        echo $bilgiCek['project_title_en'];
                                                    }
                                                    if ($diL == "ar") {
                                                        echo $bilgiCek['project_title_ar'];
                                                    }
                                                    if ($diL == "ru") {
                                                        echo $bilgiCek['project_title_ru'];
                                                    }
                                                    if ($diL == "de") {
                                                        echo $bilgiCek['project_title_de'];
                                                    }




                                                    ?></h2>
                        </div>
                    </a>
                </div>



                <div class="col-xs-12 col-sm-6">

                    <!-- visualPostColumn -->

                    <a href="projectDetail.php?id=<?= $project2Cek['project_id'] ?>" class="visualPostColumn hasOver elemenBlock text-center type02 textWhite">

                        <span class="bgCover elemenBlock" style="background-image: url(images/projects/<?= $project2Cek['project_image'] ?>);"></span>

                        <div class="captionWrap">

                            <h2 class="fontNeuron">


                                <?php if ($diL == "tr") {
                                    echo $project2Cek['project_title'];
                                }
                                if ($diL == "en") {
                                    echo $project2Cek['project_title_en'];
                                }
                                if ($diL == "ar") {
                                    echo $project2Cek['project_title_ar'];
                                }
                                if ($diL == "ru") {
                                    echo $project2Cek['project_title_ru'];
                                }
                                if ($diL == "de") {
                                    echo $project2Cek['project_title_de'];
                                }




                                ?>



                            </h2>



                        </div>

                    </a>

                    <div class="row">

                        <div class="col-xs-12 col-sm-6">

                            <a href="projectDetail.php?id=<?= $project3Cek['project_id'] ?>" class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">

                                <span class="bgCover elemenBlock" style="background-image: url(images/projects/<?= $project3Cek['project_image'] ?>);"></span>

                                <div class="captionWrap">

                                    <h2 class="fontNeuron"><?php if ($diL == "tr") {
                                                                echo $project3Cek['project_title'];
                                                            }
                                                            if ($diL == "en") {
                                                                echo $project3Cek['project_title_en'];
                                                            }
                                                            if ($diL == "ar") {
                                                                echo $project3Cek['project_title_ar'];
                                                            }
                                                            if ($diL == "ru") {
                                                                echo $project3Cek['project_title_ru'];
                                                            }
                                                            if ($diL == "de") {
                                                                echo $project3Cek['project_title_de'];
                                                            }




                                                            ?></h2>



                                </div>

                            </a>

                        </div>

                        <div class="col-xs-12 col-sm-6">

                            <a href="projectDetail.php?id=<?= $project4Cek['project_id'] ?>" class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">

                                <span class="bgCover elemenBlock" style="background-image: url(images/projects/<?= $project4Cek['project_image'] ?>);"></span>

                                <div class="captionWrap">

                                    <h2 class="fontNeuron"><?php if ($diL == "tr") {
                                                                echo $project4Cek['project_title'];
                                                            }
                                                            if ($diL == "en") {
                                                                echo $project4Cek['project_title_en'];
                                                            }
                                                            if ($diL == "ar") {
                                                                echo $project4Cek['project_title_ar'];
                                                            }
                                                            if ($diL == "ru") {
                                                                echo $project4Cek['project_title_ru'];
                                                            }
                                                            if ($diL == "de") {
                                                                echo $project4Cek['project_title_de'];
                                                            }




                                                            ?></h2>



                                </div>

                            </a>

                        </div>

                    </div>

                </div>





                <div class="col-md-12">
                    <!-- visualPostColumn -->
                    <div class="row">


                      


                        <?php

                        $projects = $baglanti->db->prepare("SELECT * from projects 

                        ORDER BY project_id DESC");

                        $projects->execute();

                        $projectsCek = $projects->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($projectsCek as $row) {

                        ?>

                            <div class="col-md-4">

                                <a href="projectDetail.php?id=<?= $row['project_id'] ?>" class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">

                                    <span class="bgCover elemenBlock" style="background-image: url(images/projects/<?= $row['project_image'] ?>);"></span>

                                    <div class="captionWrap">

                                        <h2 class="fontNeuron">


                                            <?php if ($diL == "tr") {
                                                echo $row['project_title'];
                                            }
                                            if ($diL == "en") {
                                                echo $row['project_title_en'];
                                            }
                                            if ($diL == "ar") {
                                                echo $row['project_title_ar'];
                                            }
                                            if ($diL == "ru") {
                                                echo $row['project_title_ru'];
                                            }
                                            if ($diL == "de") {
                                                echo $row['project_title_de'];
                                            }




                                            ?>

                                        </h2>



                                    </div>

                                </a>

                            </div>

                        <?php

                        }

                        ?>











                    </div>

                </div>





            </div>

        </div>

    </section>

    <!-- servicesFetaureBlock -->





    <section class="latestPostsBlock container">

        <!-- rowHead -->

  <header class="row rowHead">

            <div class="col-xs-12 col-sm-5">

                <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom"><?= $dil['popular'] ?> </span> </h1>

            </div>

        </header> 

        <!-- isoContentHolder -->

        <div class="row">

            <div class="three-slider slickSlider latestPostsSlider slide-v2">

                <?php

                $adverts = $baglanti->db->prepare("SELECT * from adverts where advert_featured=?

                                ORDER BY advert_id DESC");

                $adverts->execute(array(1));

                $advertsCek = $adverts->fetchAll(PDO::FETCH_ASSOC);


                foreach ($advertsCek as $row) {



                    //il adını il idsine göre çekmek için

                    $siteBilgi3 = $baglanti->db->prepare("SELECT * from il where id=?");

                    $siteBilgi3->execute(array($row['advert_city']));

                    $bilgiCek3 = $siteBilgi3->fetch();

                    //il adını il idsine göre çekmek için



                    //ilçe adını il idsine göre çekmek için

                    $siteBilgi4 = $baglanti->db->prepare("SELECT * from ilce where id=?");

                    $siteBilgi4->execute(array($row['advert_district']));

                    $bilgiCek4 = $siteBilgi4->fetch();

                    //ilçe adını il idsine göre çekmek için



                    //semt adını il idsine göre çekmek için

                    $siteBilgi5 = $baglanti->db->prepare("SELECT * from semt where id=?");

                    $siteBilgi5->execute(array($row['advert_area']));

                    $bilgiCek5 = $siteBilgi5->fetch();

                    //semt adını il idsine göre çekmek için



                ?>

                    <div>

                        <div class="col-xs-12">

                            <!-- postColumn -->

                            <article class="postColumn hasOver bgWhite">

                                <div class="aligncenter">

                                    <!-- postColumnImageSlider -->

                                    <div class="">

                                        <a href="estateDetail.php?id=<?= $row['advert_id'] ?>">

                                            <img src="<?= SITE_URL ?>/images/adverts/<?= $row['advert_image'] ?>" alt="image description">

                                        </a>

                                    </div>

                                    <span class="btn btnSmall btn-success btnDark text-capitalize"> <?php

                                                                                                    if ($diL == "tr") {



                                                                                                        echo   $row['advert_rent'];
                                                                                                    }

                                                                                                    if ($diL == "en") {

                                                                                                        if ($row['advert_rent'] == "Satılık") {

                                                                                                            echo "For sale";
                                                                                                        }

                                                                                                        if ($row['advert_rent'] == "Kiralık") {

                                                                                                            echo "For rent";
                                                                                                        }
                                                                                                    }

                                                                                                    if ($diL == "ar") {

                                                                                                        if ($row['advert_rent'] == "Satılık") {

                                                                                                            echo "للبيع";
                                                                                                        }

                                                                                                        if ($row['advert_rent'] == "Kiralık") {

                                                                                                            echo "للإيجار";
                                                                                                        }
                                                                                                    }

                                                                                                    if ($diL == "ru") {

                                                                                                        if ($row['advert_rent'] == "Satılık") {

                                                                                                            echo "Продается";
                                                                                                        }

                                                                                                        if ($row['advert_rent'] == "Kiralık") {

                                                                                                            echo "В аренду";
                                                                                                        }
                                                                                                    }

                                                                                                    if ($diL == "de") {

                                                                                                        if ($row['advert_rent'] == "Satılık") {

                                                                                                            echo "Zu verkaufen";
                                                                                                        }

                                                                                                        if ($row['advert_rent'] == "Kiralık") {

                                                                                                            echo "Zu vermieten";
                                                                                                        }
                                                                                                    }

                                                                                                    ?></span>

                                    <div class="postion">

                                        <h2 class="fontNeuron text-capitalize"><a href="estateDetail.php?id=<?= $row['advert_id'] ?>"><?= $row['advert_title'] ?></a></h2>

                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary"> <?= $dil['from'] . " " . $row['advert_price'] . " "  ?> <?= $row['advert_price_type'] ?></span> </h3>

                                    </div>

                                </div>

                                <address>

                                    <span class="icn"><i class="fi flaticon-pin-1"></i></span>

                                    <p><?= $bilgiCek3['il_adi'] . "  " . $bilgiCek4['ilce_adi'] ?> </p>

                                </address>

                                <!-- postColumnFoot -->

                                <footer class="postColumnFoot">

                                    <ul class="list-unstyled">

                                        <li>



                                            <strong class="fwNormal elemenBlock"><?php

                                                                                    if ($diL == "tr") {



                                                                                        echo   $row['advert_type'];
                                                                                    }

                                                                                    if ($diL == "en") {

                                                                                        if ($row['advert_type'] == "Villa") {

                                                                                            echo "Villa";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Apartment") {

                                                                                            echo "Apartment";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Land") {

                                                                                            echo "Land";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Hotel") {

                                                                                            echo "Otel";
                                                                                        }
                                                                                    }

                                                                                    if ($diL == "ar") {

                                                                                        if ($row['advert_type'] == "Villa") {

                                                                                            echo "فيلا";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Apartment") {

                                                                                            echo "شقة";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Land") {

                                                                                            echo "أرض";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Hotel") {

                                                                                            echo "الفندق";
                                                                                        }
                                                                                    }

                                                                                    if ($diL == "ru") {

                                                                                        if ($row['advert_type'] == "Villa") {

                                                                                            echo "Вилла";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Apartment") {

                                                                                            echo "квартира";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Land") {

                                                                                            echo "земля";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Hotel") {

                                                                                            echo "Гостиница";
                                                                                        }
                                                                                    }

                                                                                    if ($diL == "de") {

                                                                                        if ($row['advert_type'] == "Villa") {

                                                                                            echo "Villa";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Apartment") {

                                                                                            echo "Wohnung";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Land") {

                                                                                            echo "Land";
                                                                                        }

                                                                                        if ($row['advert_type'] == "Hotel") {

                                                                                            echo "Hotel";
                                                                                        }
                                                                                    }

                                                                                    ?></strong>

                                        </li>

                                        <li>



                                            <strong class="fwNormal elemenBlock">



                                                <?php

                                                if ($diL == "tr") {



                                                    echo   $row['advert_rent'];
                                                }

                                                if ($diL == "en") {

                                                    if ($row['advert_rent'] == "Satılık") {

                                                        echo "For sale";
                                                    }

                                                    if ($row['advert_rent'] == "Kiralık") {

                                                        echo "For rent";
                                                    }
                                                }

                                                if ($diL == "ar") {

                                                    if ($row['advert_rent'] == "Satılık") {

                                                        echo "للبيع";
                                                    }

                                                    if ($row['advert_rent'] == "Kiralık") {

                                                        echo "للإيجار";
                                                    }
                                                }

                                                if ($diL == "ru") {

                                                    if ($row['advert_rent'] == "Satılık") {

                                                        echo "Продается";
                                                    }

                                                    if ($row['advert_rent'] == "Kiralık") {

                                                        echo "В аренду";
                                                    }
                                                }

                                                if ($diL == "de") {

                                                    if ($row['advert_rent'] == "Satılık") {

                                                        echo "Zu verkaufen";
                                                    }

                                                    if ($row['advert_rent'] == "Kiralık") {

                                                        echo "Zu vermieten";
                                                    }
                                                }

                                                ?>

                                            </strong>

                                        </li>

                                        <li>



                                            <strong class="fwNormal elemenBlock"> <?php

                                                                                    if ($diL == "tr") {







                                                                                        if ($row['advert_category'] == "Brand New") {

                                                                                            echo "Yeni";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Investment") {

                                                                                            echo "Yatırım";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Luxury") {

                                                                                            echo "Lüks";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Under Construction") {

                                                                                            echo "Yapım halinde";
                                                                                        }
                                                                                    }

                                                                                    if ($diL == "en") {

                                                                                        echo   $row['advert_category'];
                                                                                    }

                                                                                    if ($diL == "ar") {

                                                                                        if ($row['advert_category'] == "Brand New") {

                                                                                            echo "يني";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Investment") {

                                                                                            echo "يتريم";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Luxury") {

                                                                                            echo "لوكس";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Under Construction") {

                                                                                            echo "تحت التشيد";
                                                                                        }
                                                                                    }

                                                                                    if ($diL == "ru") {

                                                                                        if ($row['advert_category'] == "Brand New") {

                                                                                            echo "Новый";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Investment") {

                                                                                            echo "Инвестиции";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Luxury") {

                                                                                            echo "Роскошь";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Under Construction") {

                                                                                            echo "В разработке";
                                                                                        }
                                                                                    }

                                                                                    if ($diL == "de") {

                                                                                        if ($row['advert_category'] == "Brand New") {

                                                                                            echo "Neu";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Investment") {

                                                                                            echo "Investition";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Luxury") {

                                                                                            echo "Luxus";
                                                                                        }

                                                                                        if ($row['advert_category'] == "Under Construction") {

                                                                                            echo "Bauarbeiten im Gange";
                                                                                        }
                                                                                    }

                                                                                    ?></strong>

                                        </li>



                                    </ul>

                                    <!-- postHoverLinskList -->

                                    <ul class="list-unstyled postHoverLinskList">



                                        <li><a href="#" class="linkToFavourite roundedCircle lightblue textWhite"><i class="fa fa-home"></i></a></li>

                                    </ul>

                                    <span class="float-right"><i class="far fa-user"></i><?php   ?></span>

                                </footer>

                            </article>

                        </div>

                    </div>

                <?php

                }

                ?>



















            </div>

        </div>

    </section>





    <!-- findFormBlock -->

    <form method="GET" action="estate.php" enctype="multipart/form-data" class="findFormBlock hasShadow changecolor">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-5">

                    <h2 class="fontNeuron"><?= $dil['findyourproperty'] ?></h2>

                </div>

                <!-- <div class="col-xs-12 col-sm-7">

                   

                    <ul class="list-unstyled postsFiltersList text-capitalize text-center isoFiltersList">

                        <li class="active"><a href="#">All</a></li>

                        <li><a href="#" data-filter=".rent">For Rent</a></li>

                        <li><a href="#" data-filter=".sale">For Sale</a></li>

                    </ul>

                </div> -->

            </div>

            <hr class="sep elemenBlock">

            <div class="row">







                <div class="col-md-12 col-l-6 col-m-6">

                    <div class="row">



                        <div class="col-md-2">

                            <div class="form-group">

                                <select name="type" class="chosen-select">

                                    <option value="Villa"><?= $dil['villa'] ?></option>

                                    <option value="Apartment"><?= $dil['apartment'] ?></option>

                                    <option value="Land"><?= $dil['land'] ?></option>

                                    <option value="Hotel"><?= $dil['hotel'] ?></option>





                                </select>

                            </div>

                        </div>

                        <div class="col-md-2">

                            <div class="form-group">



                                <select name="il" id="il" class="form-control ">

                                    <option><?= $dil['city'] ?> <?= $dil['select'] ?></option>

                                    <?php

                                    $sql = $baglanti->db->prepare("SELECT id,il_adi FROM il ORDER BY id ASC");

                                    $sql->execute();

                                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

                                    ?>

                                        <option value="<?= $row['id'] ?>">

                                            <?= $row['il_adi'] ?>

                                        </option>

                                    <?php

                                    }

                                    ?>

                                </select>

                            </div>

                        </div>

                        <div class="col-md-2">

                            <div class="form-group">



                                <select name="ilce" id="ilce" class="form-control" disabled="disabled">

                                    <option value=""><?= $dil['district'] ?> <?= $dil['select'] ?></option>

                                </select>

                            </div>

                        </div>



                        <div class="col-md-2">

                            <div class="form-group">



                                <select name="semt" id="semt" class="form-control" disabled="disabled">

                                    <option value=""><?= $dil['area'] ?> <?= $dil['select'] ?></option>

                                </select>

                            </div>

                        </div>





                        <div class="col-md-2">

                            <div class="form-group">

                                <select name="category" class="chosen-select">



                                    <option value=""><?= $dil['select'] ?></option>

                                    <option value="Newproduct"><?= $dil['newproduct'] ?></option>

                                    <option value="Secondhand"><?= $dil['secondhand'] ?></option>

                                    <option value="Luxury"><?= $dil['luxury'] ?></option>

                                    <option value="Building"><?= $dil['underconstruction'] ?></option>



                                </select>

                            </div>

                        </div>



                        <div class="col-md-2 ">

                            <div class="form-group">

                                <button type="submit" class="btn btnSecondary text-uppercase fontNeuron pull-right">SEARCH</button>

                            </div>

                        </div>







                    </div>

                </div>





            </div>

            <!-- orderRow -->



        </div>

    </form>

    <!-- latestPostsBlock -->

    <section class="latestPostsBlock container">

        <!-- rowHead -->

        <header class="row rowHead">

            <div class="col-xs-12 col-sm-5">

                <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom"><?= $dil['allProjects'] ?> </span> </h1>

            </div>

            <div class="col-xs-12 col-sm-7">

                <!-- postsFiltersList -->

                <ul class="list-unstyled postsFiltersList text-capitalize text-center isoFiltersList">

                    <li class="active"><a href="#"><?= $dil['all'] ?> </a></li>

                    <li><a href="#" data-filter=".rent"><?= $dil['rent'] ?> </a></li>

                    <li><a href="#" data-filter=".sale"><?= $dil['sale'] ?> </a></li>

                </ul>

            </div>

        </header>

        <!-- isoContentHolder -->

        <div class="isoContentHolder">

            <div class="row">









                <?php

                $adverts = $baglanti->db->prepare("SELECT * from adverts 

                                ORDER BY advert_id DESC");

                $adverts->execute(array(1));

                $advertsCek = $adverts->fetchAll(PDO::FETCH_ASSOC);

                foreach ($advertsCek as $row) {





                    //il adını il idsine göre çekmek için

                    $siteBilgi3 = $baglanti->db->prepare("SELECT * from il where id=?");

                    $siteBilgi3->execute(array($row['advert_city']));

                    $bilgiCek3 = $siteBilgi3->fetch();

                    //il adını il idsine göre çekmek için



                    //ilçe adını il idsine göre çekmek için

                    $siteBilgi4 = $baglanti->db->prepare("SELECT * from ilce where id=?");

                    $siteBilgi4->execute(array($row['advert_district']));

                    $bilgiCek4 = $siteBilgi4->fetch();

                    //ilçe adını il idsine göre çekmek için



                    //semt adını il idsine göre çekmek için

                    $siteBilgi5 = $baglanti->db->prepare("SELECT * from semt where id=?");

                    $siteBilgi5->execute(array($row['advert_area']));

                    $bilgiCek5 = $siteBilgi5->fetch();

                    //semt adını il idsine göre çekmek için





                ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 col isoCol <?php if ($row['advert_rent'] == "Satılık") {

                                                                            echo "sale";
                                                                        } else {

                                                                            echo "rent";
                                                                        } ?>">

                        <!-- postColumn -->

                        <article class="postColumn  bgWhite">

                            <div class="aligncenter">

                                <!-- postColumnImageSlider -->

                                <div class="slick-carousel slickSlider postColumnImageSlider autoplay">

                                    <div>

                                        <div class="imgHolder">

                                            <a href="estateDetail.php?id=<?= $row['advert_id'] ?>">

                                                <img src="<?= SITE_URL ?>/images/adverts/<?= $row['advert_image'] ?>" alt="image description">

                                            </a>

                                        </div>

                                    </div>



                                </div>

                                <!-- postHoverLinskList -->



                                <!-- linkToFavourite -->



                            </div>

                            <h2 class="fontNeuron text-capitalize"><a href="estateDetail.php?id=<?= $row['advert_id'] ?>"><?= $row['advert_title'] ?></a></h2>

                            <address>

                                <span class="icn"><i class="fi flaticon-pin-1"></i></span>

                                <p><?= $bilgiCek3['il_adi'] . "  " . $bilgiCek4['ilce_adi']  ?> </p>

                            </address>

                            <span class="btn btnSmall btn-success text-capitalize"><?= $row['advert_rent'] ?></span>

                            <h3 class="fontNeuron fwSemi"><span class="textSecondary"><?= $dil['from'] . " " .  $row['advert_price'] . " "  ?> <?= $row['advert_price_type'] ?></span> </h3>

                            <!-- postColumnFoot -->

                            <footer class="postColumnFoot">

                                <ul class="list-unstyled">

                                    <li>



                                        <strong class="fwNormal elemenBlock"><?= $row['advert_rent'] ?></strong>

                                    </li>

                                    <li>



                                        <strong class="fwNormal elemenBlock"><?= $row['advert_type'] ?></strong>

                                    </li>

                                    <li>



                                        <strong class="fwNormal elemenBlock"><?= $row['advert_category'] ?></strong>

                                    </li>



                                </ul>

                            </footer>

                        </article>

                    </div>

                <?php

                }

                ?>









            </div>

        </div>

        <div class="row text-center btnHolder">

            <a href="estate.php?page=projects" class="btn btn-primary btnPrimaryOutline text-capitalize fontNeuron"><?= $dil['allProjects'] ?></a>

        </div>

    </section>





    <!-- ourAgentBlock -->



    <!-- testimonilasBlock -->



    <section class="testimonilasBlock">

        <div class="container">

            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom"><?= $dil['commence'] ?></span></h1>

            <div class="row">

                <div class="col-xs-12 col-md-8 col-md-offset-2">

                    <!-- testimonialSlider -->

                    <div class="slickSlider testimonial-carousel testimonialSlider">



                        <?php

                        $testimontal = $baglanti->db->prepare("SELECT * from testimontal  ORDER BY id DESC");

                        $testimontal->execute(array());

                        $testimontalCek = $testimontal->fetchAll(PDO::FETCH_ASSOC);

                        $say = $testimontal->rowCount();

                        if ($say) {

                            foreach ($testimontalCek as $row) {



                        ?>





                                <div>

                                    <!-- testimonialColumn -->

                                    <article class="testimonialColumn text-center">



                                        <h2 class="fontNeuron"><a href="#"><?= $row['testimontal_ad'] ?></a></h2>

                                        <p><em><?= $row['testimontal_text'] ?></em></p>

                                    </article>

                                </div>

                        <?php



                            }
                        }



                        ?>











                    </div>

                </div>



                <div class="col-xs-12 col-sm-12 col-md-12">

                    <!-- contactFormPage -->

                    <div class="contactFormPage">

                        <h4 class="fontNeuron"><?= $dil['commence'] ?></h4>

                        <form method="POST" name="commence" action="panel/islemler/commence.php">



                            <div class="row">

                                <div class="col-xs-12 col-md-12">

                                    <div class="form-group">

                                        <input type="text" id="txtname" name="testimontal_ad" placeholder="<?= $dil['name'] ?>" class="form-control" required data-error="NEW ERROR MESSAGE">

                                    </div>

                                </div>



                            </div>



                            <div class="form-group">

                                <textarea class="form-control" id="txtmessage" name="testimontal_text" placeholder="<?= $dil['message'] ?>" required data-error="NEW ERROR MESSAGE"></textarea>

                            </div>

                            <button type="submit" name="testimontal_add" class="btn btnDark fontNeuron buttonXL" id="form-submit"><?= $dil['send'] ?></button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>





    <!-- sponsorsBlock -->

    <section class="homeapp">

        <div class="container">

            <div class="row">

                <div class="appcontent-area">



                    <!-- <div class="col-xs-12 col-sm-6 col-md-4">

                        <div class="homeapp-content text-center ">

                            <h2 style="text-transform: lowercase;">Why to live in Antalya....</h2>





                        </div>

                    </div> -->





                    <div class="col-xs-12 col-sm-12 col-md-12">



                        <div class="homeapp-content text-center">



                            <h2>Why to live in Antalya....</h2>



                            <div class="description">



                                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/mGmjzOanMYQ" title="Antalya Tanıtım" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>



                            </div>





                        </div>



                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- sponsorsBlock -->



    <!-- newsNstoriesBlock -->



    <!-- sponsorsBlock -->

    <script>
        $('.autoplay').slick({

            slidesToShow: 3,

            slidesToScroll: 2,

            autoplay: true,

            autoplaySpeed: 4000,

        });
    </script>

    <!-- signupFormAside -->

    <?php include "template/newsletter.php"; ?>

</main>

</div>

<!-- pageFooterBlock -->









<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>









<!-- 

Eski    

<script>

    $.getJSON("il-bolge.json", function(sonuc) {

        $.each(sonuc, function(index, value) {

            var row = "";

            row += '<option value="' + value.il + '">' + value.il + '</option>';

            $("#il").append(row);

        })

    });





    $("#il").on("change", function() {

        var il = $(this).val();



        $("#ilce").attr("disabled", false).html("<option value=''>Seçin..</option>");

        $.getJSON("il-ilce.json", function(sonuc) {

            $.each(sonuc, function(index, value) {

                var row = "";

                if (value.il == il) {

                    row += '<option value="' + value.ilce + '">' + value.ilce + '</option>';

                    $("#ilce").append(row);

                }

            });

        });

    });

</script> -->





<?php include "template/footer.php" ?>