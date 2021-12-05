<!DOCTYPE html>
<html lang="en">
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('desc')">
    <meta name="keywords" content="@yield('key')">
    <meta name="author" content="Bahadir Kelesoglu">

    <!-- FAVICON -->
    <link href="{{asset('assets')}}/img/favicon.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="{{asset('assets')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('assets')}}/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="{{asset('assets')}}/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')
    @yield('headerjs')
</head>

<body class="body-wrapper">
<div class="row">
    <div class="col-md-6" style="background-color: red">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi, dignissimos dolores, doloribus dolorum eos est, excepturi exercitationem fugiat hic id iure laborum natus necessitatibus nemo nesciunt nihil optio provident quod repellat tempora tempore totam ullam vel veniam voluptates voluptatum? Aliquid architecto asperiores blanditiis consequuntur dignissimos ex excepturi facere facilis, fuga fugiat hic minus odit, quasi quisquam quo rem vel velit. Alias architecto assumenda consectetur, corporis cum debitis dignissimos dolorum excepturi fugit iste magnam neque nihil nobis non numquam omnis quaerat rem rerum sed sequi sit soluta tempore, ut voluptas voluptatum. Consectetur delectus earum ex fugit itaque nulla odit optio perferendis quasi sunt. Ad aliquam blanditiis dolor, dolores ex explicabo fuga illo in inventore ipsum labore maxime modi molestias officiis praesentium quos saepe, sapiente tempora tenetur vero. Assumenda distinctio dolores dolorum ducimus eos impedit inventore, laborum minus officiis quidem quo quod tempora velit. Aliquid cum dignissimos, dolores, incidunt iste nihil numquam praesentium provident, rem repudiandae rerum sit ut. Amet, distinctio explicabo. Ab dignissimos error est explicabo fugiat, ipsam itaque maxime necessitatibus non obcaecati perspiciatis praesentium, provident quibusdam quod quos recusandae reiciendis repellendus sunt suscipit tempore temporibus totam ut vero voluptate, voluptatum. Architecto assumenda cum expedita fuga libero officiis quam totam?

    </div>
    <div class="col-md-6" style="background-color: blue">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci animi aspernatur assumenda at aut blanditiis cumque deserunt dolor dolorem enim error est facilis impedit iusto libero molestiae nam nemo neque nostrum obcaecati odio optio quam quisquam reiciendis, saepe soluta sunt tempora temporibus unde ut voluptate voluptatem voluptatum. Animi asperiores consequatur culpa cum distinctio doloremque eius explicabo id illo, iure laborum, laudantium maiores nemo nesciunt non numquam odio quisquam similique? Ad architecto asperiores aspernatur assumenda aut beatae debitis, dolor dolores doloribus esse excepturi facere hic, id, maiores natus necessitatibus nobis nulla provident totam ut! Ad aperiam dolorem ex fuga nesciunt porro quia? Ad amet aspernatur cum deleniti eius eligendi exercitationem impedit ipsam libero maiores mollitia non praesentium quaerat quasi quidem, rem reprehenderit, saepe veniam. Aliquid inventore labore maiores perferendis reiciendis repellendus sapiente vel! Adipisci aliquid aspernatur at atque aut consequuntur culpa cumque delectus doloremque eos eveniet exercitationem, expedita explicabo facere hic iure libero magni minus natus nemo neque nostrum obcaecati perspiciatis possimus provident quaerat quos recusandae repellendus sapiente sequi tempore, vel velit voluptas. Adipisci aliquid animi, dicta error iste pariatur soluta voluptate? Consequatur cum eos facere nisi nobis odit, saepe sit. Assumenda corporis dignissimos dolores et nisi quaerat, sit temporibus.
    </div>
</div>



@include('home._header')
@include('home._heroarea')
@include('home._slideshow')
@include('home._allcategory')
@include('home._cta')
@include('home._footer')
@yield('footerjs')

@section('content')
    @show
</body>
</html>
