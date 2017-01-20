<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DCR/ Leads/ Meet Reporting</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/style.css" media="all">
    </head>
    <body>
        <main role="main" class="container" style="margin-top:10px;">
            <form action="action.php" method="post">
            <h1>DCR/ Leads/ Meet Reporting</h1>
            <div class="row">            
                <div class="col-lg-6 col-lg-offset-3">
                    <?php ini_set('date.timezone', 'Asia/Kolkata'); ?>
                    <input type="hidden" name="datetime" value="<?php echo date('d-m-Y H:i:s'); ?>">
                    <div class="form-group">
                        <label for="yourname">SO/TO/LATF Name</label>
                        <input class="form-control" type="text" name="yourname" placeholder="Mickey" required>
                    </div>
                    <div class="form-group">
                        <label for="yourdistrict">District</label>
                        <select id="yourdistrict" class="form-control" role="listbox" name="yourdistrict">
                            <option value="0" selected="selected">Select Option</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Bellary">Bellary</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Kannur">Kannur</option>
                            <option value="Kasargod">Kasargod</option>
                            <option value="Kochi">Kochi</option>
                            <option value="Kurnool">Kurnool</option>
                            <option value="Mangalore">Mangalore</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="first">Call Type</label>
                        <select id="first" class="form-control" role="listbox" name="first">
                            <option value="0" selected="selected">Select Option</option>
                            <option value="1">Site Visit</option>
                            <option value="2">Dealer/sub-dealer Visit</option>
                            <option value="3">Influencer Visit</option>
                            <option value="4">Technical Meet</option>
                            <option value="5">Lead Generated</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="second">Reason/ Source</label>
                        <select id="second" class="form-control" role="listbox" disabled="disabled" name="second">
                            <option value="0" selected="selected">Select Option</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="third">Output/ Action</label>
                        <select  id="third" class="form-control" role="listbox" disabled="disabled" name="third">
                            <option value="0" selected="selected">Select Option</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text1">Source Name</label>
                        <input class="form-control" type="text" name="text1">
                    </div>
                    <div class="form-group">
                        <label for="text2">Area, town</label>
                        <input class="form-control" type="text" name="text2">
                    </div>
                    <div class="form-group">
                        <label for="text3">Influencer/Customer Name</label>
                        <input class="form-control" type="text" name="text3">
                    </div>
                    <div class="form-group">
                        <label for="text4">Influencer/Customer Type(Dealer, Sub-dealer, Engg, Contractor, Mason,etc.)</label>
                        <input class="form-control" type="text" name="text4">
                    </div>
                    <div class="form-group">
                        <label for="text1">Influencer/Customer Contact No</label>
                        <input class="form-control" type="text" name="text5">
                    </div>
                    <div class="form-group">
                        <label for="text1">Comments</label>
                        <input class="form-control" type="text" name="text6">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </div>
            </form>
        </main>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/modules/script.js"></script>
        <script type="text/javascript" src="scripts/modules/plugins.js"></script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </body>
</html>