<!-- Head page section
================================================== -->
<section>
    <div id="head-page-section" class="l-grey-bg">
        <div class="container">
            <div class="row">

                <!-- col-md-8 -->
                <div class="col-md-8 col-sm-7">
                    <div class="head-title">
                        <h1>
                            My account
                        </h1>
                    </div> <!-- end subsection-text -->
                </div> <!-- end col-md-8 -->

                <!-- col-md-4 -->
                <div class="col-md-4 col-sm-5">
                    <div class="project-navigation">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <?= Yii::$app->controller->action->id == 'login' ? '<li class="active">Login</li>' : '<li class="active">Register</li>'?>
                        </ol>
                    </div> <!-- end project-navigation -->
                </div> <!-- end col-md-4 -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </div>
</section>
<!-- end head-page-section -->