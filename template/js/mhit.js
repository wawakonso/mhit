var app = angular.module('teamApp', []);
app.controller('teamCtrl', function($scope) {


    // Slide content
      $scope.analytics_line1 = "Informed decisions. Exceptional results";
      $scope.analytics_big_title = "We talk to your Web";

      $scope.hosting_big_title = "One of the best hosting plan";
      $scope.hosting_comment = "We are here to provide powerful digital marketing solutions to small and <br> medium businesses that are looking to build success online.";

    // End Slide content

    // top_menu
    $scope.top_menu = [
        {name:"Testimonials",link:"#",class:""},
        {name:"Help",link:"#",class:""},
        {name:"Career",link:"#",class:""},
        {name:"Login",link:"#",class:"log-in-search"},
        {name:"FREE SEO Analysis",link:"#",class:"consult-search"}];

    // end top menu

    // main_menu
    $scope.main_menu = [
        {name:"Home",link:"index.php",class:"active"},
        {name:"About",link:"about.php",class:"",sub_menu:[
              {name:"Technology",link:"#"},
              {name:"",link:"#"},
        ]},
        {name:"Products",link:"#",class:""},
        {name:"Our clients",link:"#",class:"log-in-search"},
        {name:"Blog",link:"#",class:"consult-search"},
        {name:"Contact",link:"contact.php",class:"consult-search"}
      ];

    // end main menu


    $scope.logo = "images/myLogo.png";
    $scope.compEmail = "info@mhit-group.com";
    $scope.telephone = "+27 xxx xxx xxxx";
    $scope.company = "Mwenye Hekima";
    $scope.site = "http://www.mhit-group.com";

    // Team config
    $scope.dev1 = "Konso Wawa";
    $scope.devpos1 = "Lead dev Ops";

    $scope.dev2 = "Herve Ntubi";
    $scope.devpos2 = "Web Dev";

    $scope.dev3 = "xxx xxxx";
    $scope.devpos3 = "xxx xxxx";

    $scope.dev4 = "Julia Makekita";
    $scope.devpos4 = "Account Manager";


    //Hosting plan

    $scope.hosting_plan =[
        {name:"Starter Plan",curr:' R ',price:550,description:"",link:"#",packages:['2 GB Disk space','6 Email Accounts','1 Website','1 MySQL DB','Softaculous','Website Builder']},
        {name:"Business Plan",curr:' R ',price:860,description:"",link:"#",packages:['6 GB Disk space','32 Email Accounts','5 Websites','12 MySQL DB','Softaculous','Website Builder']},
        {name:"Corporate Plan",curr:' R ',price:1200,description:"",link:"#",packages:['10 GB Disk space','Unlimited Email Accounts','12 Websites','20 MySQL DB','Softaculous','Website Builder']},
        {name:"Corporate Plan",curr:' R ',price:1200,description:"",link:"#",packages:['10 GB Disk space','Unlimited Email Accounts','12 Websites','20 MySQL DB','Softaculous','Website Builder']}
    ];

    //End Hosting Plan
    $scope.CurrencyRequested = function(currency)
    {
      prices =
        {"zar":[550,860,1200,1200],
         "euro":[35,55,75,75],
         "dollar":[40,60,80,80]};
      currencySign = {
                        "zar":' R ',
                        "euro":'€​',
                        "dollar":'$'}

      $scope.hosting_plan =[
          {name:"Starter Plan",curr:currencySign[currency],price:prices[currency][0],
           description:"",link:"#",
           packages:['2 GB Disk space','6 Email Accounts','1 Website','1 MySQL DB','Softaculous','Website Builder']},
          {name:"Business Plan",curr:currencySign[currency],price:prices[currency][1],
           description:"",link:"#",
           packages:['6 GB Disk space','32 Email Accounts','5 Websites','12 MySQL DB','Softaculous','Website Builder']},
          {name:"Corporate Plan",curr:currencySign[currency],price:prices[currency][2],
           description:"",link:"#",
           packages:['10 GB Disk space','Unlimited Email Accounts','12 Websites','20 MySQL DB','Softaculous','Website Builder']},
          {name:"Corporate Plan",curr:currencySign[currency],
           price:prices[currency][3],
           description:"",link:"#",packages:['10 GB Disk space','Unlimited Email Accounts','12 Websites','20 MySQL DB','Softaculous','Website Builder']}
      ];
    }

});
