<?php include('include/header.php');?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties Grid</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Properties Grid</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">
        
        <div class="row">
        <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from admin");
        $admin=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($admin['name']);

$query=mysqli_query($con,"select * from property");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];

        ?>    
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">Featured</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    $ <?php echo $res['price'];?>
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="admin/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            
                            <div class="property-magnify-gallery">
                                
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title'];?></a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="fa fa-map-marker"></i><?php echo $res['address'];?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> <?php echo $res['bedroom'];?> : Bedroom
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> <?php echo $res['hall'];?> : Hall
                            </li>
                            <li>
                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i><?php echo $res['sqr_price'];?> Sq Ft
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> <?php echo $res['kitchen'];?> : Kitchen
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> <?php echo $u_name;?>
                        </a>
                        <span>
                                <i class="fa fa-calendar-o"></i> 1 month ago
                            </span>
                    </div>
                </div>
            </div>
<?php } ?>
            
        </div>
    </div>
</div>
<!-- Properties list fullwidth end -->

<!-- Footer start -->
<?php include('include/footer.php');?>