<?php require 'functions/functions.php'; ?>
<?php $active='changelog'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nguyen Pham">
    <title>LIFT SEM Tools</title>
    <?php require 'includes/header.php'; ?>
</head>

<body>

    <?php require 'includes/nav.php'; ?>


    <div class="container-fluid">
        <div class="row">
            <?php require 'includes/sidebar.php'; ?>


            <main class="col-md-9 ms-sm col-lg-10 col-xl px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Changelog</h1>

                </div>


                <div class="row mb-3">
                    <div class="col-12">
                        <div class="list-group">
                            <div class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v2.0.0</h5>
                                    <small>05/16/2021</small>
                                </div>
                                <p class="mb-1">Chrome extensions</p>
                                <ul class="small">
                                    <li>This is a LIFT's Chrome extensions. All-in-one tool for SEO/SEM services.</li>
                                </ul>
                            </div>
                            <div class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v1.0.5</h5>
                                    <small>05/16/2021</small>
                                </div>
                                <p class="mb-1">Curl and Agent</p>
                                <ul class="small">
                                    <li>Fetch URL HTML Code by PHP CURL and set AGENT as <code>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.141 Safari/537.36</code></li>
                                    <li>Also set <code>SSL_VERIFYPEER</code> and <code>SSL_VERIFYHOST</code> into the Fetching code</li>
                                </ul>
                            </div>
                            <div class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v1.0.4</h5>
                                    <small>05/16/2021</small>
                                </div>
                                <p class="mb-1">Code Key</p>
                                <ul class="small">
                                    <li>New feature, we use the <code>___REPLACE___</code> code key to easy replace everything in Wordpress Post generator page</li>
                                </ul>
                            </div>
                            <div class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v1.0.3</h5>
                                    <small>05/16/2021</small>
                                </div>
                                <p class="mb-1">Preview URL</p>
                                <ul class="small">
                                    <li>New feature, add the preview URL plugin in HTML Validator page</li>
                                    <li>Fixed bug when somebody type Keywords list with empty value</li>
                                </ul>
                            </div>
                            <div class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v1.0.2</h5>
                                    <small>05/15/2021</small>
                                </div>
                                <p class="mb-1">Fixed bugs and improved somethings</p>
                                <ul class="small">
                                    <li>Fixed <code>LIFT_APP.code.setOption("theme", 'monokai')</code></li>
                                    <li>Fixed <code>localStorage.getItem("myLIFT_KW")</code></li>
                                    <li>Improved save keywords list feature</li>
                                    <li>Auto load keywords list from saved list</li>
                                </ul>
                            </div>
                            <div class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v1.0.1</h5>
                                    <small>05/15/2021</small>
                                </div>
                                <p class="mb-1">Code Refactor</p>
                                <small>Big change, we have improved the source code and create matrix math to generator keyword and fixed some bugs on Wordpress Post generator tool</small>
                            </div>
                            <div class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v0.4</h5>
                                    <small>05/15/2021</small>
                                </div>
                                <p class="mb-1">HTML Code validator</p>
                                <small>Find missing or unbalanced HTML tags in your documents, stray characters, duplicate IDs, missing or invalid attributes and other recommendations.</small>
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v0.3</h5>
                                    <small class="text-muted">05/14/2021</small>
                                </div>
                                <p class="mb-1">Wordpress Post generator tool. </p>
                                <small>The tool auto-generation posts from the keywords list you have.</small>
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">v0.2</h5>
                                    <small class="text-muted">05/14/2021</small>
                                </div>
                                <p class="mb-1">Create "Keywords generator" tool. </p>
                                <small>The tool works by allowing you to input general words and phrases into the 5
                                    boxes, and then quickly generate keyword lists that can include your basic phrases
                                    and your long-tail terms.</small>
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">First version - v0.1</h5>
                                    <small class="text-muted">05/13/2021</small>
                                </div>
                                <p class="mb-1">Build the source code structure</p>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <?php require 'includes/footer.php'; ?>

</body>

</html>