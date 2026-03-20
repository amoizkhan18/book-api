<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Librora API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://api.librorabookofficial.win";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.8.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.8.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-audiobook--id--">
                                <a href="#endpoints-GETapi-audiobook--id--">GET api/audiobook/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-hardlinks--id--">
                                <a href="#endpoints-GETapi-hardlinks--id--">GET api/hardlinks/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-newbooks-search--search--">
                                <a href="#endpoints-GETapi-newbooks-search--search--">GET api/newbooks/search/{search?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-audiobooks--bookid--">
                                <a href="#endpoints-GETapi-audiobooks--bookid--">GET api/audiobooks/{bookid?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-audiobooks-genres--genres--">
                                <a href="#endpoints-GETapi-audiobooks-genres--genres--">GET api/audiobooks/genres/{genres?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-audiobooks-search--name--">
                                <a href="#endpoints-GETapi-audiobooks-search--name--">GET api/audiobooks/search/{name?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-newbooks--id--">
                                <a href="#endpoints-GETapi-newbooks--id--">GET api/newbooks/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-newbooks-genres--genres--">
                                <a href="#endpoints-GETapi-newbooks-genres--genres--">GET api/newbooks/genres/{genres?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-newbooks-search--name--">
                                <a href="#endpoints-GETapi-newbooks-search--name--">GET api/newbooks/search/{name?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-search">
                                <a href="#endpoints-GETapi-search">GET api/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-trending--id--">
                                <a href="#endpoints-GETapi-trending--id--">GET api/trending/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-popular--id--">
                                <a href="#endpoints-GETapi-popular--id--">GET api/popular/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-trending-audiobooks--id--">
                                <a href="#endpoints-GETapi-trending-audiobooks--id--">GET api/trending-audiobooks/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-popular-audiobooks--id--">
                                <a href="#endpoints-GETapi-popular-audiobooks--id--">GET api/popular-audiobooks/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-authors-top">
                                <a href="#endpoints-GETapi-authors-top">GET api/authors/top</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-authors--name--books">
                                <a href="#endpoints-GETapi-authors--name--books">GET api/authors/{name}/books</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-authors--id--">
                                <a href="#endpoints-GETapi-authors--id--">GET api/authors/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-audiobook-authors-top">
                                <a href="#endpoints-GETapi-audiobook-authors-top">GET api/audiobook-authors/top</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-audiobook-authors--name--audiobooks">
                                <a href="#endpoints-GETapi-audiobook-authors--name--audiobooks">GET api/audiobook-authors/{name}/audiobooks</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-audiobook-authors--id--">
                                <a href="#endpoints-GETapi-audiobook-authors--id--">GET api/audiobook-authors/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-recommendations-popular">
                                <a href="#endpoints-GETapi-recommendations-popular">GET /api/recommendations/popular
Fallback for new users with no history</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-favorite">
                                <a href="#endpoints-POSTapi-favorite">POST api/favorite</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-favorites">
                                <a href="#endpoints-GETapi-favorites">GET api/favorites</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-user-activity">
                                <a href="#endpoints-POSTapi-user-activity">POST api/user/activity</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-recommendations">
                                <a href="#endpoints-POSTapi-recommendations">POST /api/recommendations
Returns personalized recommendations based on user's favorite genres</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-notifications-continue-reminders">
                                <a href="#endpoints-GETapi-notifications-continue-reminders">GET api/notifications/continue-reminders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-notifications-daily-pick">
                                <a href="#endpoints-GETapi-notifications-daily-pick">GET api/notifications/daily-pick</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-notifications-set-daily-pick">
                                <a href="#endpoints-POSTapi-notifications-set-daily-pick">POST api/notifications/set-daily-pick</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-notifications-new-content">
                                <a href="#endpoints-POSTapi-notifications-new-content">POST api/notifications/new-content</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-notifications-send-segmented">
                                <a href="#endpoints-POSTapi-notifications-send-segmented">POST api/notifications/send-segmented</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-devices-register">
                                <a href="#endpoints-POSTapi-devices-register">POST api/devices/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-devices-tokens">
                                <a href="#endpoints-GETapi-devices-tokens">GET api/devices/tokens</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-devices-active">
                                <a href="#endpoints-GETapi-devices-active">GET api/devices/active</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-devices-notify-all">
                                <a href="#endpoints-POSTapi-devices-notify-all">POST api/devices/notify/all</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-devices-notify-device">
                                <a href="#endpoints-POSTapi-devices-notify-device">POST api/devices/notify/device</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-devices-notify-multiple">
                                <a href="#endpoints-POSTapi-devices-notify-multiple">POST api/devices/notify/multiple</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-devices-notify-active">
                                <a href="#endpoints-POSTapi-devices-notify-active">POST api/devices/notify/active</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-store">
                                <a href="#endpoints-POSTapi-trending-store">POST api/trending/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-update--id-">
                                <a href="#endpoints-POSTapi-trending-update--id-">POST api/trending/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-delete--id-">
                                <a href="#endpoints-POSTapi-trending-delete--id-">POST api/trending/delete/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-toggle--id-">
                                <a href="#endpoints-POSTapi-trending-toggle--id-">POST api/trending/toggle/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-reorder">
                                <a href="#endpoints-POSTapi-trending-reorder">POST api/trending/reorder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-store">
                                <a href="#endpoints-POSTapi-popular-store">POST api/popular/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-update--id-">
                                <a href="#endpoints-POSTapi-popular-update--id-">POST api/popular/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-delete--id-">
                                <a href="#endpoints-POSTapi-popular-delete--id-">POST api/popular/delete/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-toggle--id-">
                                <a href="#endpoints-POSTapi-popular-toggle--id-">POST api/popular/toggle/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-reorder">
                                <a href="#endpoints-POSTapi-popular-reorder">POST api/popular/reorder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-audiobooks-store">
                                <a href="#endpoints-POSTapi-trending-audiobooks-store">POST api/trending-audiobooks/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-audiobooks-update--id-">
                                <a href="#endpoints-POSTapi-trending-audiobooks-update--id-">POST api/trending-audiobooks/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-audiobooks-delete--id-">
                                <a href="#endpoints-POSTapi-trending-audiobooks-delete--id-">POST api/trending-audiobooks/delete/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-audiobooks-toggle--id-">
                                <a href="#endpoints-POSTapi-trending-audiobooks-toggle--id-">POST api/trending-audiobooks/toggle/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trending-audiobooks-reorder">
                                <a href="#endpoints-POSTapi-trending-audiobooks-reorder">POST api/trending-audiobooks/reorder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-audiobooks-store">
                                <a href="#endpoints-POSTapi-popular-audiobooks-store">POST api/popular-audiobooks/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-audiobooks-update--id-">
                                <a href="#endpoints-POSTapi-popular-audiobooks-update--id-">POST api/popular-audiobooks/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-audiobooks-delete--id-">
                                <a href="#endpoints-POSTapi-popular-audiobooks-delete--id-">POST api/popular-audiobooks/delete/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-audiobooks-toggle--id-">
                                <a href="#endpoints-POSTapi-popular-audiobooks-toggle--id-">POST api/popular-audiobooks/toggle/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-popular-audiobooks-reorder">
                                <a href="#endpoints-POSTapi-popular-audiobooks-reorder">POST api/popular-audiobooks/reorder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-authors-store">
                                <a href="#endpoints-POSTapi-authors-store">POST api/authors/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-authors-update--id-">
                                <a href="#endpoints-POSTapi-authors-update--id-">POST api/authors/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-authors-delete--id-">
                                <a href="#endpoints-POSTapi-authors-delete--id-">POST api/authors/delete/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-authors-toggle--id-">
                                <a href="#endpoints-POSTapi-authors-toggle--id-">POST api/authors/toggle/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-authors-reorder">
                                <a href="#endpoints-POSTapi-authors-reorder">POST api/authors/reorder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-audiobook-authors-store">
                                <a href="#endpoints-POSTapi-audiobook-authors-store">POST api/audiobook-authors/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-audiobook-authors-update--id-">
                                <a href="#endpoints-POSTapi-audiobook-authors-update--id-">POST api/audiobook-authors/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-audiobook-authors-delete--id-">
                                <a href="#endpoints-POSTapi-audiobook-authors-delete--id-">POST api/audiobook-authors/delete/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-audiobook-authors-toggle--id-">
                                <a href="#endpoints-POSTapi-audiobook-authors-toggle--id-">POST api/audiobook-authors/toggle/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-audiobook-authors-reorder">
                                <a href="#endpoints-POSTapi-audiobook-authors-reorder">POST api/audiobook-authors/reorder</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 20, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://api.librorabookofficial.win</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-audiobook--id--">GET api/audiobook/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-audiobook--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/audiobook/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audiobook--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Audiobook not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-audiobook--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audiobook--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audiobook--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audiobook--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audiobook--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audiobook--id--" data-method="GET"
      data-path="api/audiobook/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audiobook--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audiobook--id--"
                    onclick="tryItOut('GETapi-audiobook--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audiobook--id--"
                    onclick="cancelTryOut('GETapi-audiobook--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audiobook--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audiobook/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-audiobook--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-audiobook--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-audiobook--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-hardlinks--id--">GET api/hardlinks/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-hardlinks--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/hardlinks/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/hardlinks/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-hardlinks--id--">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-hardlinks--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-hardlinks--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-hardlinks--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-hardlinks--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-hardlinks--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-hardlinks--id--" data-method="GET"
      data-path="api/hardlinks/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-hardlinks--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-hardlinks--id--"
                    onclick="tryItOut('GETapi-hardlinks--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-hardlinks--id--"
                    onclick="cancelTryOut('GETapi-hardlinks--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-hardlinks--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/hardlinks/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-hardlinks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-hardlinks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-hardlinks--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-newbooks-search--search--">GET api/newbooks/search/{search?}</h2>

<p>
</p>



<span id="example-requests-GETapi-newbooks-search--search--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/newbooks/search/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/newbooks/search/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-newbooks-search--search--">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-newbooks-search--search--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-newbooks-search--search--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-newbooks-search--search--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-newbooks-search--search--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-newbooks-search--search--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-newbooks-search--search--" data-method="GET"
      data-path="api/newbooks/search/{search?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-newbooks-search--search--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-newbooks-search--search--"
                    onclick="tryItOut('GETapi-newbooks-search--search--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-newbooks-search--search--"
                    onclick="cancelTryOut('GETapi-newbooks-search--search--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-newbooks-search--search--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/newbooks/search/{search?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-newbooks-search--search--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-newbooks-search--search--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-newbooks-search--search--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-audiobooks--bookid--">GET api/audiobooks/{bookid?}</h2>

<p>
</p>



<span id="example-requests-GETapi-audiobooks--bookid--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/audiobooks/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobooks/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audiobooks--bookid--">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-audiobooks--bookid--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audiobooks--bookid--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audiobooks--bookid--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audiobooks--bookid--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audiobooks--bookid--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audiobooks--bookid--" data-method="GET"
      data-path="api/audiobooks/{bookid?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audiobooks--bookid--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audiobooks--bookid--"
                    onclick="tryItOut('GETapi-audiobooks--bookid--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audiobooks--bookid--"
                    onclick="cancelTryOut('GETapi-audiobooks--bookid--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audiobooks--bookid--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audiobooks/{bookid?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-audiobooks--bookid--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-audiobooks--bookid--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>bookid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookid"                data-endpoint="GETapi-audiobooks--bookid--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-audiobooks-genres--genres--">GET api/audiobooks/genres/{genres?}</h2>

<p>
</p>



<span id="example-requests-GETapi-audiobooks-genres--genres--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/audiobooks/genres/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobooks/genres/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audiobooks-genres--genres--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [],
    &quot;page&quot;: 1,
    &quot;limit&quot;: 10,
    &quot;total&quot;: 0,
    &quot;total_pages&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-audiobooks-genres--genres--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audiobooks-genres--genres--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audiobooks-genres--genres--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audiobooks-genres--genres--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audiobooks-genres--genres--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audiobooks-genres--genres--" data-method="GET"
      data-path="api/audiobooks/genres/{genres?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audiobooks-genres--genres--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audiobooks-genres--genres--"
                    onclick="tryItOut('GETapi-audiobooks-genres--genres--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audiobooks-genres--genres--"
                    onclick="cancelTryOut('GETapi-audiobooks-genres--genres--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audiobooks-genres--genres--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audiobooks/genres/{genres?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-audiobooks-genres--genres--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-audiobooks-genres--genres--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres"                data-endpoint="GETapi-audiobooks-genres--genres--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-audiobooks-search--name--">GET api/audiobooks/search/{name?}</h2>

<p>
</p>



<span id="example-requests-GETapi-audiobooks-search--name--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/audiobooks/search/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobooks/search/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audiobooks-search--name--">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-audiobooks-search--name--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audiobooks-search--name--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audiobooks-search--name--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audiobooks-search--name--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audiobooks-search--name--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audiobooks-search--name--" data-method="GET"
      data-path="api/audiobooks/search/{name?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audiobooks-search--name--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audiobooks-search--name--"
                    onclick="tryItOut('GETapi-audiobooks-search--name--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audiobooks-search--name--"
                    onclick="cancelTryOut('GETapi-audiobooks-search--name--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audiobooks-search--name--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audiobooks/search/{name?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-audiobooks-search--name--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-audiobooks-search--name--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="GETapi-audiobooks-search--name--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-newbooks--id--">GET api/newbooks/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-newbooks--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/newbooks/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/newbooks/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-newbooks--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Book not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-newbooks--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-newbooks--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-newbooks--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-newbooks--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-newbooks--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-newbooks--id--" data-method="GET"
      data-path="api/newbooks/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-newbooks--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-newbooks--id--"
                    onclick="tryItOut('GETapi-newbooks--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-newbooks--id--"
                    onclick="cancelTryOut('GETapi-newbooks--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-newbooks--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/newbooks/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-newbooks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-newbooks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-newbooks--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-newbooks-genres--genres--">GET api/newbooks/genres/{genres?}</h2>

<p>
</p>



<span id="example-requests-GETapi-newbooks-genres--genres--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/newbooks/genres/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/newbooks/genres/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-newbooks-genres--genres--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Books not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-newbooks-genres--genres--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-newbooks-genres--genres--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-newbooks-genres--genres--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-newbooks-genres--genres--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-newbooks-genres--genres--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-newbooks-genres--genres--" data-method="GET"
      data-path="api/newbooks/genres/{genres?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-newbooks-genres--genres--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-newbooks-genres--genres--"
                    onclick="tryItOut('GETapi-newbooks-genres--genres--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-newbooks-genres--genres--"
                    onclick="cancelTryOut('GETapi-newbooks-genres--genres--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-newbooks-genres--genres--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/newbooks/genres/{genres?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-newbooks-genres--genres--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-newbooks-genres--genres--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres"                data-endpoint="GETapi-newbooks-genres--genres--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-newbooks-search--name--">GET api/newbooks/search/{name?}</h2>

<p>
</p>



<span id="example-requests-GETapi-newbooks-search--name--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/newbooks/search/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/newbooks/search/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-newbooks-search--name--">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-newbooks-search--name--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-newbooks-search--name--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-newbooks-search--name--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-newbooks-search--name--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-newbooks-search--name--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-newbooks-search--name--" data-method="GET"
      data-path="api/newbooks/search/{name?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-newbooks-search--name--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-newbooks-search--name--"
                    onclick="tryItOut('GETapi-newbooks-search--name--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-newbooks-search--name--"
                    onclick="cancelTryOut('GETapi-newbooks-search--name--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-newbooks-search--name--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/newbooks/search/{name?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-newbooks-search--name--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-newbooks-search--name--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="GETapi-newbooks-search--name--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-search">GET api/search</h2>

<p>
</p>



<span id="example-requests-GETapi-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-search">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-search" data-method="GET"
      data-path="api/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-search"
                    onclick="tryItOut('GETapi-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-search"
                    onclick="cancelTryOut('GETapi-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-trending--id--">GET api/trending/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-trending--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/trending/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-trending--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Trending book not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-trending--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-trending--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-trending--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-trending--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-trending--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-trending--id--" data-method="GET"
      data-path="api/trending/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-trending--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-trending--id--"
                    onclick="tryItOut('GETapi-trending--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-trending--id--"
                    onclick="cancelTryOut('GETapi-trending--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-trending--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/trending/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-trending--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-trending--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-trending--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-popular--id--">GET api/popular/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-popular--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/popular/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-popular--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Popular book not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-popular--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-popular--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-popular--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-popular--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-popular--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-popular--id--" data-method="GET"
      data-path="api/popular/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-popular--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-popular--id--"
                    onclick="tryItOut('GETapi-popular--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-popular--id--"
                    onclick="cancelTryOut('GETapi-popular--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-popular--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/popular/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-popular--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-popular--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-popular--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-trending-audiobooks--id--">GET api/trending-audiobooks/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-trending-audiobooks--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/trending-audiobooks/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending-audiobooks/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-trending-audiobooks--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Trending audiobook not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-trending-audiobooks--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-trending-audiobooks--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-trending-audiobooks--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-trending-audiobooks--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-trending-audiobooks--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-trending-audiobooks--id--" data-method="GET"
      data-path="api/trending-audiobooks/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-trending-audiobooks--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-trending-audiobooks--id--"
                    onclick="tryItOut('GETapi-trending-audiobooks--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-trending-audiobooks--id--"
                    onclick="cancelTryOut('GETapi-trending-audiobooks--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-trending-audiobooks--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/trending-audiobooks/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-trending-audiobooks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-trending-audiobooks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-trending-audiobooks--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-popular-audiobooks--id--">GET api/popular-audiobooks/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-popular-audiobooks--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/popular-audiobooks/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular-audiobooks/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-popular-audiobooks--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Popular audiobook not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-popular-audiobooks--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-popular-audiobooks--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-popular-audiobooks--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-popular-audiobooks--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-popular-audiobooks--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-popular-audiobooks--id--" data-method="GET"
      data-path="api/popular-audiobooks/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-popular-audiobooks--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-popular-audiobooks--id--"
                    onclick="tryItOut('GETapi-popular-audiobooks--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-popular-audiobooks--id--"
                    onclick="cancelTryOut('GETapi-popular-audiobooks--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-popular-audiobooks--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/popular-audiobooks/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-popular-audiobooks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-popular-audiobooks--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-popular-audiobooks--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-authors-top">GET api/authors/top</h2>

<p>
</p>



<span id="example-requests-GETapi-authors-top">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/authors/top" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/top"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-authors-top">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;William Shakespeare&quot;,
        &quot;db_name&quot;: &quot;William Shakespeare&quot;,
        &quot;image&quot;: &quot;https://media.librorabookofficial.win/william.png&quot;,
        &quot;description&quot;: &quot;English playwright, poet, and actor, widely regarded as the greatest writer in the English language&quot;,
        &quot;color&quot;: &quot;#4A5568&quot;,
        &quot;display_order&quot;: 1,
        &quot;is_active&quot;: true,
        &quot;created_at&quot;: &quot;2026-03-13T23:44:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-13T23:44:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Charles Dickens&quot;,
        &quot;db_name&quot;: &quot;Charles Dickens&quot;,
        &quot;image&quot;: &quot;https://media.librorabookofficial.win/charles.png&quot;,
        &quot;description&quot;: &quot;Victorian novelist who created some of the world&#039;s best-known fictional characters&quot;,
        &quot;color&quot;: &quot;#4A5568&quot;,
        &quot;display_order&quot;: 2,
        &quot;is_active&quot;: true,
        &quot;created_at&quot;: &quot;2026-03-13T23:44:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-13T23:44:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Mark Twain&quot;,
        &quot;db_name&quot;: &quot;Mark Twain&quot;,
        &quot;image&quot;: &quot;https://media.librorabookofficial.win/mark.png&quot;,
        &quot;description&quot;: &quot;American writer, humorist, and lecturer best known for The Adventures of Tom Sawyer&quot;,
        &quot;color&quot;: &quot;#4A5568&quot;,
        &quot;display_order&quot;: 3,
        &quot;is_active&quot;: true,
        &quot;created_at&quot;: &quot;2026-03-13T23:44:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-13T23:44:19.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-authors-top" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-authors-top"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-authors-top"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-authors-top" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-authors-top">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-authors-top" data-method="GET"
      data-path="api/authors/top"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-authors-top', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-authors-top"
                    onclick="tryItOut('GETapi-authors-top');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-authors-top"
                    onclick="cancelTryOut('GETapi-authors-top');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-authors-top"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/authors/top</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-authors-top"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-authors-top"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-authors--name--books">GET api/authors/{name}/books</h2>

<p>
</p>



<span id="example-requests-GETapi-authors--name--books">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/authors/1/books" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/1/books"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-authors--name--books">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Author not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-authors--name--books" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-authors--name--books"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-authors--name--books"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-authors--name--books" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-authors--name--books">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-authors--name--books" data-method="GET"
      data-path="api/authors/{name}/books"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-authors--name--books', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-authors--name--books"
                    onclick="tryItOut('GETapi-authors--name--books');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-authors--name--books"
                    onclick="cancelTryOut('GETapi-authors--name--books');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-authors--name--books"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/authors/{name}/books</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-authors--name--books"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-authors--name--books"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="name"                data-endpoint="GETapi-authors--name--books"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-authors--id--">GET api/authors/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-authors--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/authors/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-authors--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 43
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Author not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-authors--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-authors--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-authors--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-authors--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-authors--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-authors--id--" data-method="GET"
      data-path="api/authors/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-authors--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-authors--id--"
                    onclick="tryItOut('GETapi-authors--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-authors--id--"
                    onclick="cancelTryOut('GETapi-authors--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-authors--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/authors/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-authors--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-authors--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-authors--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-audiobook-authors-top">GET api/audiobook-authors/top</h2>

<p>
</p>



<span id="example-requests-GETapi-audiobook-authors-top">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/audiobook-authors/top" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/top"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audiobook-authors-top">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 42
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;William Shakespeare&quot;,
        &quot;db_name&quot;: &quot;William Shakespeare&quot;,
        &quot;image&quot;: &quot;https://media.librorabookofficial.win/william.png&quot;,
        &quot;description&quot;: &quot;English playwright, poet, and actor, widely regarded as the greatest writer in the English language&quot;,
        &quot;color&quot;: &quot;#4A5568&quot;,
        &quot;display_order&quot;: 1,
        &quot;is_active&quot;: true,
        &quot;created_at&quot;: &quot;2026-03-13T23:44:32.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-13T23:44:32.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Charles Dickens&quot;,
        &quot;db_name&quot;: &quot;Charles Dickens&quot;,
        &quot;image&quot;: &quot;https://media.librorabookofficial.win/charles.png&quot;,
        &quot;description&quot;: &quot;Victorian novelist who created some of the world&#039;s best-known fictional characters&quot;,
        &quot;color&quot;: &quot;#4A5568&quot;,
        &quot;display_order&quot;: 2,
        &quot;is_active&quot;: true,
        &quot;created_at&quot;: &quot;2026-03-13T23:44:32.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-13T23:44:32.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Mark Twain&quot;,
        &quot;db_name&quot;: &quot;Mark Twain&quot;,
        &quot;image&quot;: &quot;https://media.librorabookofficial.win/mark.png&quot;,
        &quot;description&quot;: &quot;American writer, humorist, and lecturer best known for The Adventures of Tom Sawyer&quot;,
        &quot;color&quot;: &quot;#4A5568&quot;,
        &quot;display_order&quot;: 3,
        &quot;is_active&quot;: true,
        &quot;created_at&quot;: &quot;2026-03-13T23:44:32.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-13T23:44:32.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-audiobook-authors-top" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audiobook-authors-top"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audiobook-authors-top"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audiobook-authors-top" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audiobook-authors-top">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audiobook-authors-top" data-method="GET"
      data-path="api/audiobook-authors/top"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audiobook-authors-top', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audiobook-authors-top"
                    onclick="tryItOut('GETapi-audiobook-authors-top');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audiobook-authors-top"
                    onclick="cancelTryOut('GETapi-audiobook-authors-top');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audiobook-authors-top"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audiobook-authors/top</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-audiobook-authors-top"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-audiobook-authors-top"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-audiobook-authors--name--audiobooks">GET api/audiobook-authors/{name}/audiobooks</h2>

<p>
</p>



<span id="example-requests-GETapi-audiobook-authors--name--audiobooks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/audiobook-authors/1/audiobooks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/1/audiobooks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audiobook-authors--name--audiobooks">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 41
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Author not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-audiobook-authors--name--audiobooks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audiobook-authors--name--audiobooks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audiobook-authors--name--audiobooks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audiobook-authors--name--audiobooks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audiobook-authors--name--audiobooks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audiobook-authors--name--audiobooks" data-method="GET"
      data-path="api/audiobook-authors/{name}/audiobooks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audiobook-authors--name--audiobooks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audiobook-authors--name--audiobooks"
                    onclick="tryItOut('GETapi-audiobook-authors--name--audiobooks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audiobook-authors--name--audiobooks"
                    onclick="cancelTryOut('GETapi-audiobook-authors--name--audiobooks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audiobook-authors--name--audiobooks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audiobook-authors/{name}/audiobooks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-audiobook-authors--name--audiobooks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-audiobook-authors--name--audiobooks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="name"                data-endpoint="GETapi-audiobook-authors--name--audiobooks"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-audiobook-authors--id--">GET api/audiobook-authors/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-audiobook-authors--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/audiobook-authors/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audiobook-authors--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 40
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Author not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-audiobook-authors--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audiobook-authors--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audiobook-authors--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audiobook-authors--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audiobook-authors--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audiobook-authors--id--" data-method="GET"
      data-path="api/audiobook-authors/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audiobook-authors--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audiobook-authors--id--"
                    onclick="tryItOut('GETapi-audiobook-authors--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audiobook-authors--id--"
                    onclick="cancelTryOut('GETapi-audiobook-authors--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audiobook-authors--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audiobook-authors/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-audiobook-authors--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-audiobook-authors--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-audiobook-authors--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-recommendations-popular">GET /api/recommendations/popular
Fallback for new users with no history</h2>

<p>
</p>



<span id="example-requests-GETapi-recommendations-popular">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/recommendations/popular" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/recommendations/popular"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-recommendations-popular">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 39
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;favorite_genres&quot;: [
        &quot;Popular&quot;
    ],
    &quot;books&quot;: [
        {
            &quot;id&quot;: 3273,
            &quot;title&quot;: &quot;The Renaissance of the Vocal Art\nA Practical Study of Vitality, Vitalized Energy, of the Physical, Mental and Emotional Powers of the Singer, through Flexible, Elastic Bodily Movements&quot;,
            &quot;author&quot;: &quot;Myer, Edmund J. (Edmund John), 1846-1934&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg12856.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/12856.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/12856&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content the book introduces readers to Myer&#039;s motivation and perspective on vocal art, outlining the evolution of singing techniques from the Old Italian School through the Dark Ages to the modern pursuit of a natural approach. He asserts that previous methods have often relied on artificial practices, hindering vocal freedom and expression. Myer stresses the significance of flexible movements, self-expression, and the development of emotional energy&mdash;a concept he describes as the \&quot;singer&#039;s sensation.\&quot; This foundation sets the stage for his systematic approach to vocal training, which the following chapters will delve into further. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Languages &amp; Literature&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 8945,
            &quot;title&quot;: &quot;A Further Contribution to the Study of the Mortuary Customs of the North American Indians&quot;,
            &quot;author&quot;: &quot;Yarrow, H. C. (Harry Cr&eacute;cy), 1840-1929&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg11398.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/11398.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/11398&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content the study, which is to compile and analyze mortuary customs among North American Indians, a subject of growing interest in ethnological research. Dr. Yarrow emphasizes the rapid decline of these traditional practices and the importance of preserving them for future study. He outlines the classifications of burial methods, including inhumation in pits and graves, cremation, and aquatic burials, setting the stage for a detailed examination of various tribes&#039; rituals and ceremonies surrounding death. The beginning establishes a multifaceted view of how different cultures within North America approach the concept of death and burial, highlighting the diversity and commonalities in these significant rituals. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Languages &amp; Literature&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 7837,
            &quot;title&quot;: &quot;Selected Poems&quot;,
            &quot;author&quot;: &quot;Frost, Robert, 1874-1963&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg59824.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/59824.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/59824&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content language and imagery. The first poems, such as \&quot;The Pasture\&quot; and \&quot;The Cow in Apple-Time,\&quot; paint vivid pictures of pastoral life, inviting readers into serene rural landscapes while also hinting at deeper emotional undertones. In the subsequent pieces, the emotional complexities of human relationships and the passage of time emerge, as seen in poems like \&quot;Home Burial\&quot; and \&quot;An Old Man&#039;s Winter Night.\&quot; These early selections set the stage for a rich exploration of both personal and universal themes throughout the collection, demonstrating Frost&#039;s unique ability to connect the natural world with profound human emotion. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Poetry&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 4122,
            &quot;title&quot;: &quot;Hearts of Three&quot;,
            &quot;author&quot;: &quot;London, Jack, 1876-1916&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg54068.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/54068.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/54068&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content At the start of the book, Francis Morgan is living a leisurely life, discussing his father&#039;s legacy and contemplating a fishing trip when he encounters a web of intrigue tied to his lineage. After a chance meeting with the beautiful Leoncia, who mistakenly believes him to be his cousin Henry, he is thrust into a tumultuous narrative involving accusations of murder and treasure hunting in a perilous setting. As the story unfolds, Francis grapples with his feelings for Leoncia and the implications of family loyalty and identity, setting the stage for a gripping tale of adventure and romance that promises excitement and unexpected turns. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Fantasy&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 7082,
            &quot;title&quot;: &quot;Heroes of the Telegraph&quot;,
            &quot;author&quot;: &quot;Munro, John, 1849-1930&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg979.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/979.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/979&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content efforts from various inventors rather than the accomplishment of a single individual. Munro notes that the book serves as a sequel to \&quot;Pioneers of Electricity,\&quot; providing a narrative journey through the history and origins of the telegraph. The first chapter delves into early scientific discoveries related to electricity and magnetism, laying the groundwork for subsequent discussions about figures like Charles Wheatstone and Samuel Morse, who played pivotal roles in making the telegraph a practical tool for communication. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;History&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 843,
            &quot;title&quot;: &quot;The Story of My Life &mdash; Complete&quot;,
            &quot;author&quot;: &quot;Ebers, Georg, 1837-1898&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg5599.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/5599.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/5599&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content with Egyptology. The opening of the autobiography introduces the reader to Ebers&rsquo;s life, marked by the poignant circumstances of his birth as a posthumous child, just days after his father&#039;s passing. He reflects fondly on his childhood, describing the nurturing environment created by his mother, who instilled in him a sense of comfort and purpose. Ebers recounts his early experiences, from playing in the gardens of his childhood home to the loving relationship he developed with his family, especially with his mother and siblings. His portrayal of these formative years emphasizes themes of love, loss, and the pursuit of knowledge, setting the groundwork for the exploration of his later academic achievements and personal growth throughout the narrative. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Languages &amp; Literature&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 9918,
            &quot;title&quot;: &quot;Meyers Konversationslexikon Band 15&quot;,
            &quot;author&quot;: &quot;Various&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg10223.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/10223.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/10223&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content the encyclopedia and providing readers with details on how to participate in corrections. It introduces various entries, such as the description of \&quot;Sodbrennen\&quot; (heartburn), the painter \&quot;Soddoma,\&quot; and several geographical locations like \&quot;Soden,\&quot; while offering a detailed account of their relevance, historical context, and significance. The text demonstrates the lexicon&rsquo;s commitment to preserving knowledge from its era through meticulous entries that offer insights into both everyday topics and historical figures, indicative of the broader ambition of the entire lexicon. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Languages &amp; Literature&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 11317,
            &quot;title&quot;: &quot;The Faith of Islam&quot;,
            &quot;author&quot;: &quot;Sell, Edward, 1839-1932&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg20660.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/20660.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/20660&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content these elements exert on the lives of adherents and the societies in which they reside. At the start of the book, the author reflects on the religion of Islam, outlining its foundational concepts, primarily the Qur&#039;an and Sunnat (the teachings and practices of the Prophet Muhammad). He emphasizes the complexities within the religion, pointing out that while the Qur&#039;an is revered as central, it is not the sole authority; the Sunnat, Ijm&aacute;&#039; (consensus), and Q&iacute;&aacute;s (analogical reasoning) also play critical roles in interpreting Islamic doctrine and law. Sell introduces readers to the notion that Islam is not a static faith but rather a dynamic system influenced by historical and cultural contexts. He sets the tone for further exploration into the various sects, theological discussions, and the practical obligations of Muslims, indicating a thorough approach to understanding Islam in both its theoretical and lived dimensions. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Languages &amp; Literature&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 6822,
            &quot;title&quot;: &quot;Historic Paris&quot;,
            &quot;author&quot;: &quot;Wolff, Jetta Sophia&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg42722.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/42722.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/42722&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content transformation from a simple hunting lodge to a royal palace, detailing the architectural modifications made over the centuries and the key historical events that took place within its walls. The narrative not only emphasizes the architectural richness of the Louvre but also hints at the tumultuous history of the city, using the building as a lens through which to examine broader historical themes. The author invites readers to appreciate the artistry and historical significance found in every corner of Paris as they explore its streets and structures. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;History&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 5901,
            &quot;title&quot;: &quot;Home-Life of the Lancashire Factory Folk during the Cotton Famine&quot;,
            &quot;author&quot;: &quot;Waugh, Edwin, 1817-1890&quot;,
            &quot;imageurl&quot;: &quot;https://media.librorabookofficial.win/pg10126.cover.medium.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/10126.epub3.images.epub&quot;,
            &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/10126&quot;,
            &quot;bookdesc&quot;: &quot;Always visible content town&#039;s former vibrancy and its current state of despair. He describes the grim reality of the factory operatives who are now struggling with severe unemployment and poverty, leading to a pervasive atmosphere of hopelessness. The chapter introduces several characters, including factory workers leaning listlessly against bridges and shopkeepers too proud to ask for help, capturing the grit and resilience of the community in the face of hardship. Waugh also highlights the compassion that emerges within the community as individuals band together to help those in need, despite their own dire circumstances. This exploration invites readers to understand the profound human impact of economic crises and the strength of communal bonds during times of struggle. (This is an automatically generated summary.)&quot;,
            &quot;genres&quot;: &quot;Languages &amp; Literature&quot;,
            &quot;type&quot;: &quot;book&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        }
    ],
    &quot;audiobooks&quot;: [
        {
            &quot;id&quot;: 2565,
            &quot;bookid&quot;: 2565,
            &quot;title&quot;: &quot;A Florentine Tragedy and La Sainte Courtisane&quot;,
            &quot;author&quot;: &quot;By: Oscar Wilde (1854-1900)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/a-florentine-tragedy-and-la-sainte-courtisane-by-oscar-wilde.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/a-florentine-tragedy-and-la-sainte-courtisane-by-oscar-wilde&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/florentinetragedy_courtisane_0909/twoplays_0_wilde_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/florentinetragedy_courtisane_0909/twoplays_1_wilde_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/florentinetragedy_courtisane_0909/twoplays_2_wilde_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;Oscar Wilde&#039;s dual play, \&quot;A Florentine Tragedy and La Sainte Courtisane,\&quot; combines two contrasting works that explore themes of love, lust, power, and morality.&quot;,
            &quot;genres&quot;: [
                &quot;Dramatic Works, Play, Essay/Short nonfiction, Literature, Short stories, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 3377,
            &quot;bookid&quot;: 3377,
            &quot;title&quot;: &quot;Some Rambling Notes of an Idle Excursion&quot;,
            &quot;author&quot;: &quot;By: Mark Twain (1835-1910)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/Some-Rambling-Notes-of-an-Idle-Excursion.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/Some-Rambling-Notes-of-an-Idle-Excursion-by-Twain&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/rambling_notes_1204_librivox/rambling_01_twain_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rambling_notes_1204_librivox/rambling_02_twain_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rambling_notes_1204_librivox/rambling_03_twain_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rambling_notes_1204_librivox/rambling_04_twain_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;Some Rambling Notes of an Idle Excursion is a delightful collection of humorous and meandering essays by Mark Twain. The book follows the author and his friend as they embark on a leisurely boating trip down the Thames River in England. Along the way, Twain shares his observations and musings on the sights, sounds, and people they encounter, offering a unique and often satirical perspective on English society.&quot;,
            &quot;genres&quot;: [
                &quot;Fiction, Literature, Adventure, Comedy, Essay/Short nonfiction, Humor, Short stories, Travel, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 3395,
            &quot;bookid&quot;: 3395,
            &quot;title&quot;: &quot;Members of the Family&quot;,
            &quot;author&quot;: &quot;By: Owen Wister (1860-1938)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/Members-of-the-Family.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/Members-of-the-Family&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_00_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_01_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_02_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_03_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_04_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_05_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_06_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_07_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_08_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_09_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_10_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_11_wister_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/members_family_1207_librivox/membersoffamily_12_wister_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;Members of the Family by Owen Wister is a captivating novel that tells the story of a wealthy American family in the early 20th century. The novel explores the various dynamics and relationships within the family, from the troubled daughter who struggles with addiction to the stoic patriarch who tries to keep the family together.&quot;,
            &quot;genres&quot;: [
                &quot;Adventure, Fiction, Short stories, Westerns, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 291,
            &quot;bookid&quot;: 291,
            &quot;title&quot;: &quot;Fifty Famous Stories Retold&quot;,
            &quot;author&quot;: &quot;By: James Baldwin (1841-1925)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/Fifty-Famous-Stories-Retold.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/fifty-famous-stories-retold-by-james-baldwin&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_00_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_01_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_02_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_03_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_04_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_05_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_06_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_07_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_08_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_09_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_10_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_11_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_12_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_13_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_14_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_15_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_16_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_17_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_18_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_19_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_20_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_21_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_22_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_23_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_24_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_25_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_26_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_27_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_28_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_29_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_30_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_31_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_32_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_33_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_34_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_35_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_36_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_37_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_38_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_39_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_40_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_41_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_42_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_43_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_44_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_45_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_46_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_47_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_48_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_49_baldwin_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/fifty_famous_stories_ver2_0809_librivox/50famousstoriesretold_50_baldwin_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;A collection of inspiring tales from history and legend. Baldwin retells stories of courage, wisdom, and character in an engaging and accessible style. Perfect for listeners young and old.&quot;,
            &quot;genres&quot;: [
                &quot;Children, Fairy tales, Fiction, History, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 1116,
            &quot;bookid&quot;: 1116,
            &quot;title&quot;: &quot;Rootabaga Stories&quot;,
            &quot;author&quot;: &quot;By: Carl Sandburg (1878-1967)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/Rootabaga-Stories.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/rootabaga-stories-by-carl-sandburg&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_01_sandburg_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_02_sandburg_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_03_sandburg_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_04_sandburg_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_05_sandburg_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_06_sandburg_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_07_sandburg_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rootabaga_stories_librivox/rootabaga_stories_08_sandburg_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;Rootabaga Stories by Carl Sandburg is a whimsical and delightful collection of stories that takes readers on a journey through the fictional land of Rootabaga. Filled with nonsensical characters and fantastical adventures, each tale is lighthearted and imaginative, making it a joy to read.&quot;,
            &quot;genres&quot;: [
                &quot;Animals, Children, Fiction, Humor, Short stories, Fairy tales, Fantasy, Literature, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 168,
            &quot;bookid&quot;: 168,
            &quot;title&quot;: &quot;This Country of Ours&quot;,
            &quot;author&quot;: &quot;By: Henrietta Elizabeth Marshall (1867-1941)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/This-Country-of-Ours-Part-1.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/this-country-of-ours-part-1-by-he-marshall&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_01_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_02_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_03_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_04_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_05_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_06_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_07_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_08_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_09_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_10_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_11_marshall_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/this_country_pt1_ks/this_country_12_marshall_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;Discover the story of America&rsquo;s growth in This Country of Ours by Henrietta Elizabeth Marshall. Marshall presents U.S. history in an engaging and accessible way, highlighting key events, leaders, and the nation&rsquo;s development for young readers and history enthusiasts alike.&quot;,
            &quot;genres&quot;: [
                &quot;Politics, Children, History, Short stories, Teen/Young adult, Non-fiction, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 2794,
            &quot;bookid&quot;: 2794,
            &quot;title&quot;: &quot;On Something&quot;,
            &quot;author&quot;: &quot;By: Hilaire Belloc&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/on-something-by-hilaire-belloc.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/on-something-by-hilaire-belloc&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_01_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_02_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_03_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_04_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_05_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_06_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_07_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_08_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_09_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_10_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_11_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_12_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_13_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_14_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_15_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_16_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_17_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_18_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_19_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_20_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_21_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_22_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_23_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_24_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_25_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_26_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_27_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_28_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_29_hilairebelloc_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/on_something_0909_rc_librivox2/onsomething_30_hilairebelloc_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;On Something by Hilaire Belloc is a collection of essays that explores a variety of topics, ranging from the nature of humor to the role of tradition in society. Throughout the book, Belloc&#039;s wit and intelligence shine through, making for an engaging and thought-provoking read.&quot;,
            &quot;genres&quot;: [
                &quot;Essay/Short nonfiction, Fiction, Non-fiction, Literature, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 1377,
            &quot;bookid&quot;: 1377,
            &quot;title&quot;: &quot;Rewards and Fairies&quot;,
            &quot;author&quot;: &quot;By: Rudyard Kipling (1865-1936)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/Rewards-and-Fairies.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/rewards-and-fairies-by-rudyard-kipling&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_01_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_02_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_03_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_04_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_05_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_06_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_07_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_08_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_09_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_10_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_11_kipling_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rewards_fairies_0807_librivox/rewardsandfairies_12_kipling_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;Rewards and Fairies is a captivating collection of short stories by Rudyard Kipling that weaves together themes of history, folklore, and adventure. Set in the English countryside, the stories follow the adventures of Dan and Una, two children who encounter magical beings and uncover hidden truths about the past.&quot;,
            &quot;genres&quot;: [
                &quot;Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 3678,
            &quot;bookid&quot;: 3678,
            &quot;title&quot;: &quot;Rameau&#039;s Nephew&quot;,
            &quot;author&quot;: &quot;By: Denis Diderot (1713-1784)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/Rameaus-Nephew.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/Rameaus-Nephew&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_1_diderot_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_2_diderot_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_3_diderot_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_4_diderot_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_5_diderot_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_6_diderot_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_7_diderot_64kb.mp3\&quot;, \&quot;http://www.archive.org/download/rameaus_nephew_bb3_librivox/rameausnephew_8_diderot_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;Rameau&#039;s Nephew is an intriguing and thought-provoking piece of literature that delves into the complexities of human behavior and societal norms. The protagonist, Rameau&#039;s nephew, is a fascinating and enigmatic character who challenges the reader&#039;s perceptions and values.&quot;,
            &quot;genres&quot;: [
                &quot;Fiction, Satire, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        },
        {
            &quot;id&quot;: 3077,
            &quot;bookid&quot;: 3077,
            &quot;title&quot;: &quot;Mysterium&quot;,
            &quot;author&quot;: &quot;By: August Strindberg (1849-1912)&quot;,
            &quot;imageurl&quot;: &quot;https://www.loyalbooks.com/image/detail/Mysterium-August-Strindberg.jpg&quot;,
            &quot;bookurl&quot;: &quot;https://www.loyalbooks.com/book/Mysterium-August-Strindberg&quot;,
            &quot;audiolinks&quot;: &quot;\&quot;http://www.archive.org/download/mysterium_0911_librivox/mysterium_strindberg_64kb.mp3\&quot;&quot;,
            &quot;bookdesc&quot;: &quot;\&quot;Mysterium\&quot; by August Strindberg is a compelling and enigmatic exploration of human nature, spirituality, and the supernatural. The story follows a group of characters who become entangled in a series of mysterious events that test their beliefs, relationships, and sanity.&quot;,
            &quot;genres&quot;: [
                &quot;Dramatic Works, Play, Children, Fiction, Fantasy, Mystery, Adventure, Children, Comedy, Fairy tales, Fantasy, Fiction, Historical Fiction, History, Humor, Literature, Mystery, Non-fiction, Philosophy, Poetry, Romance, Religion, Science fiction, Short stories, Teen/Young adult&quot;
            ],
            &quot;type&quot;: &quot;audio&quot;,
            &quot;genre&quot;: &quot;Popular&quot;
        }
    ],
    &quot;is_personalized&quot;: false
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-recommendations-popular" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-recommendations-popular"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-recommendations-popular"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-recommendations-popular" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-recommendations-popular">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-recommendations-popular" data-method="GET"
      data-path="api/recommendations/popular"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-recommendations-popular', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-recommendations-popular"
                    onclick="tryItOut('GETapi-recommendations-popular');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-recommendations-popular"
                    onclick="cancelTryOut('GETapi-recommendations-popular');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-recommendations-popular"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/recommendations/popular</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-recommendations-popular"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-recommendations-popular"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-favorite">POST api/favorite</h2>

<p>
</p>



<span id="example-requests-POSTapi-favorite">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/favorite" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"book_id\": \"consequatur\",
    \"device_id\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/favorite"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "book_id": "consequatur",
    "device_id": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-favorite">
</span>
<span id="execution-results-POSTapi-favorite" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-favorite"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-favorite"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-favorite" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-favorite">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-favorite" data-method="POST"
      data-path="api/favorite"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-favorite', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-favorite"
                    onclick="tryItOut('POSTapi-favorite');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-favorite"
                    onclick="cancelTryOut('POSTapi-favorite');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-favorite"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/favorite</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-favorite"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-favorite"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>book_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="book_id"                data-endpoint="POSTapi-favorite"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the books table. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="POSTapi-favorite"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-favorites">GET api/favorites</h2>

<p>
</p>



<span id="example-requests-GETapi-favorites">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/favorites" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"device_id\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/favorites"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "device_id": "consequatur"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-favorites">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 38
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-favorites" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-favorites"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-favorites"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-favorites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-favorites">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-favorites" data-method="GET"
      data-path="api/favorites"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-favorites', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-favorites"
                    onclick="tryItOut('GETapi-favorites');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-favorites"
                    onclick="cancelTryOut('GETapi-favorites');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-favorites"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/favorites</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="GETapi-favorites"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-user-activity">POST api/user/activity</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-activity">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/user/activity" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fcm_token\": \"consequatur\",
    \"last_book_title\": \"consequatur\",
    \"last_book_type\": \"audio\",
    \"last_book_url\": \"http:\\/\\/kunze.biz\\/iste-laborum-eius-est-dolor.html\",
    \"last_book_cover\": \"consequatur\",
    \"last_progress\": 13
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/user/activity"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fcm_token": "consequatur",
    "last_book_title": "consequatur",
    "last_book_type": "audio",
    "last_book_url": "http:\/\/kunze.biz\/iste-laborum-eius-est-dolor.html",
    "last_book_cover": "consequatur",
    "last_progress": 13
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-activity">
</span>
<span id="execution-results-POSTapi-user-activity" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-activity"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-activity"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-user-activity" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-activity">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-user-activity" data-method="POST"
      data-path="api/user/activity"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-activity', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-activity"
                    onclick="tryItOut('POSTapi-user-activity');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-activity"
                    onclick="cancelTryOut('POSTapi-user-activity');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-activity"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/activity</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-user-activity"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-user-activity"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fcm_token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fcm_token"                data-endpoint="POSTapi-user-activity"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_book_title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_book_title"                data-endpoint="POSTapi-user-activity"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_book_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_book_type"                data-endpoint="POSTapi-user-activity"
               value="audio"
               data-component="body">
    <br>
<p>Example: <code>audio</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>epub</code></li> <li><code>audio</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_book_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_book_url"                data-endpoint="POSTapi-user-activity"
               value="http://kunze.biz/iste-laborum-eius-est-dolor.html"
               data-component="body">
    <br>
<p>Example: <code>http://kunze.biz/iste-laborum-eius-est-dolor.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_book_cover</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_book_cover"                data-endpoint="POSTapi-user-activity"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_progress</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="last_progress"                data-endpoint="POSTapi-user-activity"
               value="13"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 100. Example: <code>13</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres"                data-endpoint="POSTapi-user-activity"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-POSTapi-recommendations">POST /api/recommendations
Returns personalized recommendations based on user&#039;s favorite genres</h2>

<p>
</p>



<span id="example-requests-POSTapi-recommendations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/recommendations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fcm_token\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/recommendations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fcm_token": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-recommendations">
</span>
<span id="execution-results-POSTapi-recommendations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-recommendations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-recommendations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-recommendations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-recommendations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-recommendations" data-method="POST"
      data-path="api/recommendations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-recommendations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-recommendations"
                    onclick="tryItOut('POSTapi-recommendations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-recommendations"
                    onclick="cancelTryOut('POSTapi-recommendations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-recommendations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/recommendations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-recommendations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-recommendations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fcm_token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fcm_token"                data-endpoint="POSTapi-recommendations"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-notifications-continue-reminders">GET api/notifications/continue-reminders</h2>

<p>
</p>



<span id="example-requests-GETapi-notifications-continue-reminders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/notifications/continue-reminders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/notifications/continue-reminders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-notifications-continue-reminders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 37
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-notifications-continue-reminders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-notifications-continue-reminders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notifications-continue-reminders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-notifications-continue-reminders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notifications-continue-reminders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-notifications-continue-reminders" data-method="GET"
      data-path="api/notifications/continue-reminders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-notifications-continue-reminders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-notifications-continue-reminders"
                    onclick="tryItOut('GETapi-notifications-continue-reminders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-notifications-continue-reminders"
                    onclick="cancelTryOut('GETapi-notifications-continue-reminders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-notifications-continue-reminders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/notifications/continue-reminders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-notifications-continue-reminders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-notifications-continue-reminders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-notifications-daily-pick">GET api/notifications/daily-pick</h2>

<p>
</p>



<span id="example-requests-GETapi-notifications-daily-pick">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/notifications/daily-pick" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/notifications/daily-pick"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-notifications-daily-pick">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 36
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 11912,
    &quot;title&quot;: &quot;The Green Beret&quot;,
    &quot;author&quot;: &quot;Purdom, Tom, 1936-&quot;,
    &quot;bookdesc&quot;: &quot;Always visible content Corporal Harry Read, a member of the UN Inspector Corps, as he embarks on a dangerous mission to arrest the dictator Umluana, who has escalated military tensions in Africa. The story vividly depicts Read&#039;s internal struggles and development as he faces intense conflict while trying to ensure Umluana is brought to justice. Through a series of action-packed scenes involving gunfire, gas warfare, and the desperate fight for survival at a transmitter station, Read grapples with loyalty to his mission and the realities of combat. Ultimately, as he pushes through the challenges, his character is tested in ways he never anticipated, leading to show his bravery and selflessness in the face of imminent danger. (This is an automatically generated summary.)&quot;,
    &quot;cover&quot;: &quot;https://media.librorabookofficial.win/pg24278.cover.medium.jpg&quot;,
    &quot;bookurl&quot;: &quot;https://media.librorabookofficial.win/24278.epub3.images.epub&quot;,
    &quot;audiolinks&quot;: null,
    &quot;downurl&quot;: &quot;https://www.gutenberg.org/ebooks/24278&quot;,
    &quot;genres&quot;: [
        &quot;Short Stories&quot;
    ],
    &quot;type&quot;: &quot;book&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-notifications-daily-pick" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-notifications-daily-pick"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notifications-daily-pick"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-notifications-daily-pick" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notifications-daily-pick">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-notifications-daily-pick" data-method="GET"
      data-path="api/notifications/daily-pick"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-notifications-daily-pick', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-notifications-daily-pick"
                    onclick="tryItOut('GETapi-notifications-daily-pick');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-notifications-daily-pick"
                    onclick="cancelTryOut('GETapi-notifications-daily-pick');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-notifications-daily-pick"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/notifications/daily-pick</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-notifications-daily-pick"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-notifications-daily-pick"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-notifications-set-daily-pick">POST api/notifications/set-daily-pick</h2>

<p>
</p>



<span id="example-requests-POSTapi-notifications-set-daily-pick">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/notifications/set-daily-pick" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"audio\",
    \"book_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/notifications/set-daily-pick"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "audio",
    "book_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-notifications-set-daily-pick">
</span>
<span id="execution-results-POSTapi-notifications-set-daily-pick" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-notifications-set-daily-pick"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-notifications-set-daily-pick"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-notifications-set-daily-pick" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-notifications-set-daily-pick">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-notifications-set-daily-pick" data-method="POST"
      data-path="api/notifications/set-daily-pick"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-notifications-set-daily-pick', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-notifications-set-daily-pick"
                    onclick="tryItOut('POSTapi-notifications-set-daily-pick');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-notifications-set-daily-pick"
                    onclick="cancelTryOut('POSTapi-notifications-set-daily-pick');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-notifications-set-daily-pick"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/notifications/set-daily-pick</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-notifications-set-daily-pick"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-notifications-set-daily-pick"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-notifications-set-daily-pick"
               value="audio"
               data-component="body">
    <br>
<p>Example: <code>audio</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>book</code></li> <li><code>audio</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>book_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="book_id"                data-endpoint="POSTapi-notifications-set-daily-pick"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-notifications-new-content">POST api/notifications/new-content</h2>

<p>
</p>



<span id="example-requests-POSTapi-notifications-new-content">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/notifications/new-content" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"audio\",
    \"book_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/notifications/new-content"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "audio",
    "book_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-notifications-new-content">
</span>
<span id="execution-results-POSTapi-notifications-new-content" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-notifications-new-content"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-notifications-new-content"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-notifications-new-content" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-notifications-new-content">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-notifications-new-content" data-method="POST"
      data-path="api/notifications/new-content"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-notifications-new-content', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-notifications-new-content"
                    onclick="tryItOut('POSTapi-notifications-new-content');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-notifications-new-content"
                    onclick="cancelTryOut('POSTapi-notifications-new-content');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-notifications-new-content"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/notifications/new-content</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-notifications-new-content"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-notifications-new-content"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-notifications-new-content"
               value="audio"
               data-component="body">
    <br>
<p>Example: <code>audio</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>book</code></li> <li><code>audio</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>book_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="book_id"                data-endpoint="POSTapi-notifications-new-content"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-notifications-send-segmented">POST api/notifications/send-segmented</h2>

<p>
</p>



<span id="example-requests-POSTapi-notifications-send-segmented">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/notifications/send-segmented" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"segment\": \"active_7_days\",
    \"title\": \"consequatur\",
    \"body\": \"consequatur\",
    \"image\": \"consequatur\",
    \"book_id\": 17,
    \"book_type\": \"audio\",
    \"genre\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/notifications/send-segmented"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "segment": "active_7_days",
    "title": "consequatur",
    "body": "consequatur",
    "image": "consequatur",
    "book_id": 17,
    "book_type": "audio",
    "genre": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-notifications-send-segmented">
</span>
<span id="execution-results-POSTapi-notifications-send-segmented" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-notifications-send-segmented"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-notifications-send-segmented"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-notifications-send-segmented" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-notifications-send-segmented">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-notifications-send-segmented" data-method="POST"
      data-path="api/notifications/send-segmented"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-notifications-send-segmented', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-notifications-send-segmented"
                    onclick="tryItOut('POSTapi-notifications-send-segmented');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-notifications-send-segmented"
                    onclick="cancelTryOut('POSTapi-notifications-send-segmented');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-notifications-send-segmented"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/notifications/send-segmented</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-notifications-send-segmented"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-notifications-send-segmented"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>segment</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="segment"                data-endpoint="POSTapi-notifications-send-segmented"
               value="active_7_days"
               data-component="body">
    <br>
<p>Example: <code>active_7_days</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>all_users</code></li> <li><code>active_7_days</code></li> <li><code>audiobook_users</code></li> <li><code>book_users</code></li> <li><code>inactive_users</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-notifications-send-segmented"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="body"                data-endpoint="POSTapi-notifications-send-segmented"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="image"                data-endpoint="POSTapi-notifications-send-segmented"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>book_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="book_id"                data-endpoint="POSTapi-notifications-send-segmented"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>book_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="book_type"                data-endpoint="POSTapi-notifications-send-segmented"
               value="audio"
               data-component="body">
    <br>
<p>Example: <code>audio</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>book</code></li> <li><code>audio</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genre</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genre"                data-endpoint="POSTapi-notifications-send-segmented"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-devices-register">POST api/devices/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-devices-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/devices/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/devices/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-devices-register">
</span>
<span id="execution-results-POSTapi-devices-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-devices-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-devices-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-devices-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-devices-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-devices-register" data-method="POST"
      data-path="api/devices/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-devices-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-devices-register"
                    onclick="tryItOut('POSTapi-devices-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-devices-register"
                    onclick="cancelTryOut('POSTapi-devices-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-devices-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/devices/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-devices-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-devices-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-devices-tokens">GET api/devices/tokens</h2>

<p>
</p>



<span id="example-requests-GETapi-devices-tokens">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/devices/tokens" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/devices/tokens"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-devices-tokens">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 35
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;fcm_token&quot;: &quot;fS7QiyUiSBOVZcqVSotTBR:APA91bERFaJKfTe1QdenVysVk5ewiNGmnljW4E77aJG4S3TZN88P-YVSIP3ECBXQEStpI7iuuUWtbRDyNdFLIEag9dAv9egslik7meIpKLDruifQbUqXmew&quot;,
        &quot;device_model&quot;: &quot;TECNO KC3&quot;,
        &quot;last_active_at&quot;: &quot;2026-03-20T01:37:24.000000Z&quot;
    },
    {
        &quot;fcm_token&quot;: &quot;fYDN8KM3TraXJQywsX3BTP:APA91bG_E9MkIxXaoJJmt4_mDD6ToOIZVZ_S_h2fjf50BFSUAuwZThXf9V1M6xQ5utmHeCDKdHjDZQHx73Xv3247En-c_BSQ5o5oQp2CQZYp_mrJdNKuwgQ&quot;,
        &quot;device_model&quot;: &quot;TECNO KC3&quot;,
        &quot;last_active_at&quot;: &quot;2026-03-19T20:21:07.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-devices-tokens" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-devices-tokens"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-devices-tokens"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-devices-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-devices-tokens">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-devices-tokens" data-method="GET"
      data-path="api/devices/tokens"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-devices-tokens', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-devices-tokens"
                    onclick="tryItOut('GETapi-devices-tokens');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-devices-tokens"
                    onclick="cancelTryOut('GETapi-devices-tokens');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-devices-tokens"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/devices/tokens</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-devices-tokens"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-devices-tokens"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-devices-active">GET api/devices/active</h2>

<p>
</p>



<span id="example-requests-GETapi-devices-active">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.librorabookofficial.win/api/devices/active" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/devices/active"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-devices-active">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 34
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    &quot;fYDN8KM3TraXJQywsX3BTP:APA91bG_E9MkIxXaoJJmt4_mDD6ToOIZVZ_S_h2fjf50BFSUAuwZThXf9V1M6xQ5utmHeCDKdHjDZQHx73Xv3247En-c_BSQ5o5oQp2CQZYp_mrJdNKuwgQ&quot;,
    &quot;fS7QiyUiSBOVZcqVSotTBR:APA91bERFaJKfTe1QdenVysVk5ewiNGmnljW4E77aJG4S3TZN88P-YVSIP3ECBXQEStpI7iuuUWtbRDyNdFLIEag9dAv9egslik7meIpKLDruifQbUqXmew&quot;
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-devices-active" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-devices-active"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-devices-active"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-devices-active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-devices-active">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-devices-active" data-method="GET"
      data-path="api/devices/active"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-devices-active', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-devices-active"
                    onclick="tryItOut('GETapi-devices-active');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-devices-active"
                    onclick="cancelTryOut('GETapi-devices-active');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-devices-active"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/devices/active</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-devices-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-devices-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-devices-notify-all">POST api/devices/notify/all</h2>

<p>
</p>



<span id="example-requests-POSTapi-devices-notify-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/devices/notify/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/devices/notify/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-devices-notify-all">
</span>
<span id="execution-results-POSTapi-devices-notify-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-devices-notify-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-devices-notify-all"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-devices-notify-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-devices-notify-all">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-devices-notify-all" data-method="POST"
      data-path="api/devices/notify/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-devices-notify-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-devices-notify-all"
                    onclick="tryItOut('POSTapi-devices-notify-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-devices-notify-all"
                    onclick="cancelTryOut('POSTapi-devices-notify-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-devices-notify-all"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/devices/notify/all</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-devices-notify-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-devices-notify-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-devices-notify-device">POST api/devices/notify/device</h2>

<p>
</p>



<span id="example-requests-POSTapi-devices-notify-device">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/devices/notify/device" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/devices/notify/device"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-devices-notify-device">
</span>
<span id="execution-results-POSTapi-devices-notify-device" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-devices-notify-device"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-devices-notify-device"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-devices-notify-device" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-devices-notify-device">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-devices-notify-device" data-method="POST"
      data-path="api/devices/notify/device"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-devices-notify-device', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-devices-notify-device"
                    onclick="tryItOut('POSTapi-devices-notify-device');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-devices-notify-device"
                    onclick="cancelTryOut('POSTapi-devices-notify-device');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-devices-notify-device"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/devices/notify/device</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-devices-notify-device"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-devices-notify-device"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-devices-notify-multiple">POST api/devices/notify/multiple</h2>

<p>
</p>



<span id="example-requests-POSTapi-devices-notify-multiple">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/devices/notify/multiple" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/devices/notify/multiple"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-devices-notify-multiple">
</span>
<span id="execution-results-POSTapi-devices-notify-multiple" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-devices-notify-multiple"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-devices-notify-multiple"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-devices-notify-multiple" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-devices-notify-multiple">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-devices-notify-multiple" data-method="POST"
      data-path="api/devices/notify/multiple"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-devices-notify-multiple', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-devices-notify-multiple"
                    onclick="tryItOut('POSTapi-devices-notify-multiple');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-devices-notify-multiple"
                    onclick="cancelTryOut('POSTapi-devices-notify-multiple');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-devices-notify-multiple"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/devices/notify/multiple</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-devices-notify-multiple"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-devices-notify-multiple"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-devices-notify-active">POST api/devices/notify/active</h2>

<p>
</p>



<span id="example-requests-POSTapi-devices-notify-active">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/devices/notify/active" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/devices/notify/active"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-devices-notify-active">
</span>
<span id="execution-results-POSTapi-devices-notify-active" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-devices-notify-active"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-devices-notify-active"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-devices-notify-active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-devices-notify-active">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-devices-notify-active" data-method="POST"
      data-path="api/devices/notify/active"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-devices-notify-active', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-devices-notify-active"
                    onclick="tryItOut('POSTapi-devices-notify-active');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-devices-notify-active"
                    onclick="cancelTryOut('POSTapi-devices-notify-active');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-devices-notify-active"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/devices/notify/active</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-devices-notify-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-devices-notify-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-trending-store">POST api/trending/store</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"bookurl\": \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\",
    \"genres\": [
        \"consequatur\"
    ],
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "bookurl": "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias",
    "genres": [
        "consequatur"
    ],
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-store">
</span>
<span id="execution-results-POSTapi-trending-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-store" data-method="POST"
      data-path="api/trending/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-store"
                    onclick="tryItOut('POSTapi-trending-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-store"
                    onclick="cancelTryOut('POSTapi-trending-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-trending-store"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-trending-store"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-trending-store"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-trending-store"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookurl"                data-endpoint="POSTapi-trending-store"
               value="http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-trending-store"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-trending-store"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-trending-store"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-trending-store" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-trending-store"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-trending-store" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-trending-store"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-trending-update--id-">POST api/trending/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending/update/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"bookurl\": \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\",
    \"genres\": [
        \"consequatur\"
    ],
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending/update/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "bookurl": "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias",
    "genres": [
        "consequatur"
    ],
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-update--id-">
</span>
<span id="execution-results-POSTapi-trending-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-update--id-" data-method="POST"
      data-path="api/trending/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-update--id-"
                    onclick="tryItOut('POSTapi-trending-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-update--id-"
                    onclick="cancelTryOut('POSTapi-trending-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-trending-update--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-trending-update--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-trending-update--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-trending-update--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-trending-update--id-"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookurl"                data-endpoint="POSTapi-trending-update--id-"
               value="http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-trending-update--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-trending-update--id-"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-trending-update--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-trending-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-trending-update--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-trending-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-trending-update--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-trending-delete--id-">POST api/trending/delete/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending/delete/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending/delete/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-delete--id-">
</span>
<span id="execution-results-POSTapi-trending-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-delete--id-" data-method="POST"
      data-path="api/trending/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-delete--id-"
                    onclick="tryItOut('POSTapi-trending-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-delete--id-"
                    onclick="cancelTryOut('POSTapi-trending-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-trending-delete--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-trending-toggle--id-">POST api/trending/toggle/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-toggle--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending/toggle/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending/toggle/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-toggle--id-">
</span>
<span id="execution-results-POSTapi-trending-toggle--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-toggle--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-toggle--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-toggle--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-toggle--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-toggle--id-" data-method="POST"
      data-path="api/trending/toggle/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-toggle--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-toggle--id-"
                    onclick="tryItOut('POSTapi-trending-toggle--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-toggle--id-"
                    onclick="cancelTryOut('POSTapi-trending-toggle--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-toggle--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending/toggle/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-trending-toggle--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the toggle. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-trending-reorder">POST api/trending/reorder</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"books\": [
        {
            \"id\": \"consequatur\",
            \"order\": 17
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "books": [
        {
            "id": "consequatur",
            "order": 17
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-reorder">
</span>
<span id="execution-results-POSTapi-trending-reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-reorder" data-method="POST"
      data-path="api/trending/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-reorder"
                    onclick="tryItOut('POSTapi-trending-reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-reorder"
                    onclick="cancelTryOut('POSTapi-trending-reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>books</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="books.0.id"                data-endpoint="POSTapi-trending-reorder"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the trending_books table. Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="books.0.order"                data-endpoint="POSTapi-trending-reorder"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-popular-store">POST api/popular/store</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"bookurl\": \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\",
    \"genres\": [
        \"consequatur\"
    ],
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "bookurl": "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias",
    "genres": [
        "consequatur"
    ],
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-store">
</span>
<span id="execution-results-POSTapi-popular-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-store" data-method="POST"
      data-path="api/popular/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-store"
                    onclick="tryItOut('POSTapi-popular-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-store"
                    onclick="cancelTryOut('POSTapi-popular-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-popular-store"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-popular-store"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-popular-store"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-popular-store"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookurl"                data-endpoint="POSTapi-popular-store"
               value="http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-popular-store"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-popular-store"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-popular-store"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-popular-store" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-popular-store"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-popular-store" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-popular-store"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-popular-update--id-">POST api/popular/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular/update/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"bookurl\": \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\",
    \"genres\": [
        \"consequatur\"
    ],
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular/update/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "bookurl": "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias",
    "genres": [
        "consequatur"
    ],
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-update--id-">
</span>
<span id="execution-results-POSTapi-popular-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-update--id-" data-method="POST"
      data-path="api/popular/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-update--id-"
                    onclick="tryItOut('POSTapi-popular-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-update--id-"
                    onclick="cancelTryOut('POSTapi-popular-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-popular-update--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-popular-update--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-popular-update--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-popular-update--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-popular-update--id-"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookurl"                data-endpoint="POSTapi-popular-update--id-"
               value="http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://schmeler.com/a-quo-sed-fugit-facilis-perferendis-dolores-molestias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-popular-update--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-popular-update--id-"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-popular-update--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-popular-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-popular-update--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-popular-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-popular-update--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-popular-delete--id-">POST api/popular/delete/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular/delete/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular/delete/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-delete--id-">
</span>
<span id="execution-results-POSTapi-popular-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-delete--id-" data-method="POST"
      data-path="api/popular/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-delete--id-"
                    onclick="tryItOut('POSTapi-popular-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-delete--id-"
                    onclick="cancelTryOut('POSTapi-popular-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-popular-delete--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-popular-toggle--id-">POST api/popular/toggle/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-toggle--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular/toggle/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular/toggle/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-toggle--id-">
</span>
<span id="execution-results-POSTapi-popular-toggle--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-toggle--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-toggle--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-toggle--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-toggle--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-toggle--id-" data-method="POST"
      data-path="api/popular/toggle/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-toggle--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-toggle--id-"
                    onclick="tryItOut('POSTapi-popular-toggle--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-toggle--id-"
                    onclick="cancelTryOut('POSTapi-popular-toggle--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-toggle--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular/toggle/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-popular-toggle--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the toggle. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-popular-reorder">POST api/popular/reorder</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"books\": [
        {
            \"id\": \"consequatur\",
            \"order\": 17
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "books": [
        {
            "id": "consequatur",
            "order": 17
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-reorder">
</span>
<span id="execution-results-POSTapi-popular-reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-reorder" data-method="POST"
      data-path="api/popular/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-reorder"
                    onclick="tryItOut('POSTapi-popular-reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-reorder"
                    onclick="cancelTryOut('POSTapi-popular-reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>books</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="books.0.id"                data-endpoint="POSTapi-popular-reorder"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the popular_books table. Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="books.0.order"                data-endpoint="POSTapi-popular-reorder"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-trending-audiobooks-store">POST api/trending-audiobooks/store</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-audiobooks-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending-audiobooks/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"audiolinks\": [
        \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\"
    ],
    \"genres\": [
        \"consequatur\"
    ],
    \"color\": \"#4CD4ab\",
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending-audiobooks/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "audiolinks": [
        "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
    ],
    "genres": [
        "consequatur"
    ],
    "color": "#4CD4ab",
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-audiobooks-store">
</span>
<span id="execution-results-POSTapi-trending-audiobooks-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-audiobooks-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-audiobooks-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-audiobooks-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-audiobooks-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-audiobooks-store" data-method="POST"
      data-path="api/trending-audiobooks/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-audiobooks-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-audiobooks-store"
                    onclick="tryItOut('POSTapi-trending-audiobooks-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-audiobooks-store"
                    onclick="cancelTryOut('POSTapi-trending-audiobooks-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-audiobooks-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending-audiobooks/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>audiolinks</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="audiolinks[0]"                data-endpoint="POSTapi-trending-audiobooks-store"
               data-component="body">
        <input type="text" style="display: none"
               name="audiolinks[1]"                data-endpoint="POSTapi-trending-audiobooks-store"
               data-component="body">
    <br>
<p>Must be a valid URL.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-trending-audiobooks-store"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-trending-audiobooks-store"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="#4CD4ab"
               data-component="body">
    <br>
<p>Must match the regex /^#[0-9A-Fa-f]{6}$/. Example: <code>#4CD4ab</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-trending-audiobooks-store"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-trending-audiobooks-store" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-trending-audiobooks-store"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-trending-audiobooks-store" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-trending-audiobooks-store"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-trending-audiobooks-update--id-">POST api/trending-audiobooks/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-audiobooks-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending-audiobooks/update/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"audiolinks\": [
        \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\"
    ],
    \"genres\": [
        \"consequatur\"
    ],
    \"color\": \"#4CD4ab\",
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending-audiobooks/update/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "audiolinks": [
        "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
    ],
    "genres": [
        "consequatur"
    ],
    "color": "#4CD4ab",
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-audiobooks-update--id-">
</span>
<span id="execution-results-POSTapi-trending-audiobooks-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-audiobooks-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-audiobooks-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-audiobooks-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-audiobooks-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-audiobooks-update--id-" data-method="POST"
      data-path="api/trending-audiobooks/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-audiobooks-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-audiobooks-update--id-"
                    onclick="tryItOut('POSTapi-trending-audiobooks-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-audiobooks-update--id-"
                    onclick="cancelTryOut('POSTapi-trending-audiobooks-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-audiobooks-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending-audiobooks/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>audiolinks</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="audiolinks[0]"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="audiolinks[1]"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               data-component="body">
    <br>
<p>Must be a valid URL.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="#4CD4ab"
               data-component="body">
    <br>
<p>Must match the regex /^#[0-9A-Fa-f]{6}$/. Example: <code>#4CD4ab</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-trending-audiobooks-update--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-trending-audiobooks-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-trending-audiobooks-update--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-trending-audiobooks-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-trending-audiobooks-update--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-trending-audiobooks-delete--id-">POST api/trending-audiobooks/delete/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-audiobooks-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending-audiobooks/delete/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending-audiobooks/delete/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-audiobooks-delete--id-">
</span>
<span id="execution-results-POSTapi-trending-audiobooks-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-audiobooks-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-audiobooks-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-audiobooks-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-audiobooks-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-audiobooks-delete--id-" data-method="POST"
      data-path="api/trending-audiobooks/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-audiobooks-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-audiobooks-delete--id-"
                    onclick="tryItOut('POSTapi-trending-audiobooks-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-audiobooks-delete--id-"
                    onclick="cancelTryOut('POSTapi-trending-audiobooks-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-audiobooks-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending-audiobooks/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-audiobooks-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-audiobooks-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-trending-audiobooks-delete--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-trending-audiobooks-toggle--id-">POST api/trending-audiobooks/toggle/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-audiobooks-toggle--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending-audiobooks/toggle/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending-audiobooks/toggle/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-audiobooks-toggle--id-">
</span>
<span id="execution-results-POSTapi-trending-audiobooks-toggle--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-audiobooks-toggle--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-audiobooks-toggle--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-audiobooks-toggle--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-audiobooks-toggle--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-audiobooks-toggle--id-" data-method="POST"
      data-path="api/trending-audiobooks/toggle/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-audiobooks-toggle--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-audiobooks-toggle--id-"
                    onclick="tryItOut('POSTapi-trending-audiobooks-toggle--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-audiobooks-toggle--id-"
                    onclick="cancelTryOut('POSTapi-trending-audiobooks-toggle--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-audiobooks-toggle--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending-audiobooks/toggle/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-audiobooks-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-audiobooks-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-trending-audiobooks-toggle--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the toggle. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-trending-audiobooks-reorder">POST api/trending-audiobooks/reorder</h2>

<p>
</p>



<span id="example-requests-POSTapi-trending-audiobooks-reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/trending-audiobooks/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"audiobooks\": [
        {
            \"id\": \"consequatur\",
            \"order\": 17
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/trending-audiobooks/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "audiobooks": [
        {
            "id": "consequatur",
            "order": 17
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trending-audiobooks-reorder">
</span>
<span id="execution-results-POSTapi-trending-audiobooks-reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trending-audiobooks-reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trending-audiobooks-reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trending-audiobooks-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trending-audiobooks-reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trending-audiobooks-reorder" data-method="POST"
      data-path="api/trending-audiobooks/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trending-audiobooks-reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trending-audiobooks-reorder"
                    onclick="tryItOut('POSTapi-trending-audiobooks-reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trending-audiobooks-reorder"
                    onclick="cancelTryOut('POSTapi-trending-audiobooks-reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trending-audiobooks-reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trending-audiobooks/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trending-audiobooks-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trending-audiobooks-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>audiobooks</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="audiobooks.0.id"                data-endpoint="POSTapi-trending-audiobooks-reorder"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the trending_audiobooks table. Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="audiobooks.0.order"                data-endpoint="POSTapi-trending-audiobooks-reorder"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-popular-audiobooks-store">POST api/popular-audiobooks/store</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-audiobooks-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular-audiobooks/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"audiolinks\": [
        \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\"
    ],
    \"genres\": [
        \"consequatur\"
    ],
    \"color\": \"#4CD4ab\",
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular-audiobooks/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "audiolinks": [
        "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
    ],
    "genres": [
        "consequatur"
    ],
    "color": "#4CD4ab",
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-audiobooks-store">
</span>
<span id="execution-results-POSTapi-popular-audiobooks-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-audiobooks-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-audiobooks-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-audiobooks-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-audiobooks-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-audiobooks-store" data-method="POST"
      data-path="api/popular-audiobooks/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-audiobooks-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-audiobooks-store"
                    onclick="tryItOut('POSTapi-popular-audiobooks-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-audiobooks-store"
                    onclick="cancelTryOut('POSTapi-popular-audiobooks-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-audiobooks-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular-audiobooks/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>audiolinks</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="audiolinks[0]"                data-endpoint="POSTapi-popular-audiobooks-store"
               data-component="body">
        <input type="text" style="display: none"
               name="audiolinks[1]"                data-endpoint="POSTapi-popular-audiobooks-store"
               data-component="body">
    <br>
<p>Must be a valid URL.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-popular-audiobooks-store"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-popular-audiobooks-store"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="#4CD4ab"
               data-component="body">
    <br>
<p>Must match the regex /^#[0-9A-Fa-f]{6}$/. Example: <code>#4CD4ab</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-popular-audiobooks-store"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-popular-audiobooks-store" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-popular-audiobooks-store"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-popular-audiobooks-store" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-popular-audiobooks-store"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-popular-audiobooks-update--id-">POST api/popular-audiobooks/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-audiobooks-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular-audiobooks/update/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"author\": \"amniihfqcoynlazghdtqt\",
    \"bookdesc\": \"consequatur\",
    \"imageurl\": \"https:\\/\\/www.mueller.com\\/laborum-eius-est-dolor-dolores-minus-voluptatem\",
    \"audiolinks\": [
        \"http:\\/\\/schmeler.com\\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias\"
    ],
    \"genres\": [
        \"consequatur\"
    ],
    \"color\": \"#4CD4ab\",
    \"order\": 17,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular-audiobooks/update/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "author": "amniihfqcoynlazghdtqt",
    "bookdesc": "consequatur",
    "imageurl": "https:\/\/www.mueller.com\/laborum-eius-est-dolor-dolores-minus-voluptatem",
    "audiolinks": [
        "http:\/\/schmeler.com\/a-quo-sed-fugit-facilis-perferendis-dolores-molestias"
    ],
    "genres": [
        "consequatur"
    ],
    "color": "#4CD4ab",
    "order": 17,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-audiobooks-update--id-">
</span>
<span id="execution-results-POSTapi-popular-audiobooks-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-audiobooks-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-audiobooks-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-audiobooks-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-audiobooks-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-audiobooks-update--id-" data-method="POST"
      data-path="api/popular-audiobooks/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-audiobooks-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-audiobooks-update--id-"
                    onclick="tryItOut('POSTapi-popular-audiobooks-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-audiobooks-update--id-"
                    onclick="cancelTryOut('POSTapi-popular-audiobooks-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-audiobooks-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular-audiobooks/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bookdesc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bookdesc"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imageurl</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="imageurl"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://www.mueller.com/laborum-eius-est-dolor-dolores-minus-voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>audiolinks</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="audiolinks[0]"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="audiolinks[1]"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               data-component="body">
    <br>
<p>Must be a valid URL.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres[0]"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="genres[1]"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="#4CD4ab"
               data-component="body">
    <br>
<p>Must match the regex /^#[0-9A-Fa-f]{6}$/. Example: <code>#4CD4ab</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-popular-audiobooks-update--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-popular-audiobooks-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-popular-audiobooks-update--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-popular-audiobooks-update--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-popular-audiobooks-update--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-popular-audiobooks-delete--id-">POST api/popular-audiobooks/delete/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-audiobooks-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular-audiobooks/delete/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular-audiobooks/delete/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-audiobooks-delete--id-">
</span>
<span id="execution-results-POSTapi-popular-audiobooks-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-audiobooks-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-audiobooks-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-audiobooks-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-audiobooks-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-audiobooks-delete--id-" data-method="POST"
      data-path="api/popular-audiobooks/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-audiobooks-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-audiobooks-delete--id-"
                    onclick="tryItOut('POSTapi-popular-audiobooks-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-audiobooks-delete--id-"
                    onclick="cancelTryOut('POSTapi-popular-audiobooks-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-audiobooks-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular-audiobooks/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-audiobooks-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-audiobooks-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-popular-audiobooks-delete--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-popular-audiobooks-toggle--id-">POST api/popular-audiobooks/toggle/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-audiobooks-toggle--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular-audiobooks/toggle/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular-audiobooks/toggle/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-audiobooks-toggle--id-">
</span>
<span id="execution-results-POSTapi-popular-audiobooks-toggle--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-audiobooks-toggle--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-audiobooks-toggle--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-audiobooks-toggle--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-audiobooks-toggle--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-audiobooks-toggle--id-" data-method="POST"
      data-path="api/popular-audiobooks/toggle/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-audiobooks-toggle--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-audiobooks-toggle--id-"
                    onclick="tryItOut('POSTapi-popular-audiobooks-toggle--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-audiobooks-toggle--id-"
                    onclick="cancelTryOut('POSTapi-popular-audiobooks-toggle--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-audiobooks-toggle--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular-audiobooks/toggle/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-audiobooks-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-audiobooks-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-popular-audiobooks-toggle--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the toggle. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-popular-audiobooks-reorder">POST api/popular-audiobooks/reorder</h2>

<p>
</p>



<span id="example-requests-POSTapi-popular-audiobooks-reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/popular-audiobooks/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"audiobooks\": [
        {
            \"id\": \"consequatur\",
            \"order\": 17
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/popular-audiobooks/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "audiobooks": [
        {
            "id": "consequatur",
            "order": 17
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-popular-audiobooks-reorder">
</span>
<span id="execution-results-POSTapi-popular-audiobooks-reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-popular-audiobooks-reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-popular-audiobooks-reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-popular-audiobooks-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-popular-audiobooks-reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-popular-audiobooks-reorder" data-method="POST"
      data-path="api/popular-audiobooks/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-popular-audiobooks-reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-popular-audiobooks-reorder"
                    onclick="tryItOut('POSTapi-popular-audiobooks-reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-popular-audiobooks-reorder"
                    onclick="cancelTryOut('POSTapi-popular-audiobooks-reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-popular-audiobooks-reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/popular-audiobooks/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-popular-audiobooks-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-popular-audiobooks-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>audiobooks</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="audiobooks.0.id"                data-endpoint="POSTapi-popular-audiobooks-reorder"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the popular_audiobooks table. Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="audiobooks.0.order"                data-endpoint="POSTapi-popular-audiobooks-reorder"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-authors-store">POST api/authors/store</h2>

<p>
</p>



<span id="example-requests-POSTapi-authors-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/authors/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-authors-store">
</span>
<span id="execution-results-POSTapi-authors-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-authors-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-authors-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-authors-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-authors-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-authors-store" data-method="POST"
      data-path="api/authors/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-authors-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-authors-store"
                    onclick="tryItOut('POSTapi-authors-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-authors-store"
                    onclick="cancelTryOut('POSTapi-authors-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-authors-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/authors/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-authors-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-authors-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-authors-update--id-">POST api/authors/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-authors-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/authors/update/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/update/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-authors-update--id-">
</span>
<span id="execution-results-POSTapi-authors-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-authors-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-authors-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-authors-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-authors-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-authors-update--id-" data-method="POST"
      data-path="api/authors/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-authors-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-authors-update--id-"
                    onclick="tryItOut('POSTapi-authors-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-authors-update--id-"
                    onclick="cancelTryOut('POSTapi-authors-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-authors-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/authors/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-authors-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-authors-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-authors-update--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-authors-delete--id-">POST api/authors/delete/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-authors-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/authors/delete/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/delete/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-authors-delete--id-">
</span>
<span id="execution-results-POSTapi-authors-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-authors-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-authors-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-authors-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-authors-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-authors-delete--id-" data-method="POST"
      data-path="api/authors/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-authors-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-authors-delete--id-"
                    onclick="tryItOut('POSTapi-authors-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-authors-delete--id-"
                    onclick="cancelTryOut('POSTapi-authors-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-authors-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/authors/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-authors-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-authors-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-authors-delete--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-authors-toggle--id-">POST api/authors/toggle/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-authors-toggle--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/authors/toggle/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/toggle/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-authors-toggle--id-">
</span>
<span id="execution-results-POSTapi-authors-toggle--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-authors-toggle--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-authors-toggle--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-authors-toggle--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-authors-toggle--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-authors-toggle--id-" data-method="POST"
      data-path="api/authors/toggle/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-authors-toggle--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-authors-toggle--id-"
                    onclick="tryItOut('POSTapi-authors-toggle--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-authors-toggle--id-"
                    onclick="cancelTryOut('POSTapi-authors-toggle--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-authors-toggle--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/authors/toggle/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-authors-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-authors-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-authors-toggle--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the toggle. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-authors-reorder">POST api/authors/reorder</h2>

<p>
</p>



<span id="example-requests-POSTapi-authors-reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/authors/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/authors/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-authors-reorder">
</span>
<span id="execution-results-POSTapi-authors-reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-authors-reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-authors-reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-authors-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-authors-reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-authors-reorder" data-method="POST"
      data-path="api/authors/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-authors-reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-authors-reorder"
                    onclick="tryItOut('POSTapi-authors-reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-authors-reorder"
                    onclick="cancelTryOut('POSTapi-authors-reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-authors-reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/authors/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-authors-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-authors-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-audiobook-authors-store">POST api/audiobook-authors/store</h2>

<p>
</p>



<span id="example-requests-POSTapi-audiobook-authors-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/audiobook-authors/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-audiobook-authors-store">
</span>
<span id="execution-results-POSTapi-audiobook-authors-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-audiobook-authors-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-audiobook-authors-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-audiobook-authors-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-audiobook-authors-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-audiobook-authors-store" data-method="POST"
      data-path="api/audiobook-authors/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-audiobook-authors-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-audiobook-authors-store"
                    onclick="tryItOut('POSTapi-audiobook-authors-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-audiobook-authors-store"
                    onclick="cancelTryOut('POSTapi-audiobook-authors-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-audiobook-authors-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/audiobook-authors/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-audiobook-authors-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-audiobook-authors-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-audiobook-authors-update--id-">POST api/audiobook-authors/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-audiobook-authors-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/audiobook-authors/update/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/update/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-audiobook-authors-update--id-">
</span>
<span id="execution-results-POSTapi-audiobook-authors-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-audiobook-authors-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-audiobook-authors-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-audiobook-authors-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-audiobook-authors-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-audiobook-authors-update--id-" data-method="POST"
      data-path="api/audiobook-authors/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-audiobook-authors-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-audiobook-authors-update--id-"
                    onclick="tryItOut('POSTapi-audiobook-authors-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-audiobook-authors-update--id-"
                    onclick="cancelTryOut('POSTapi-audiobook-authors-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-audiobook-authors-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/audiobook-authors/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-audiobook-authors-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-audiobook-authors-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-audiobook-authors-update--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-audiobook-authors-delete--id-">POST api/audiobook-authors/delete/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-audiobook-authors-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/audiobook-authors/delete/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/delete/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-audiobook-authors-delete--id-">
</span>
<span id="execution-results-POSTapi-audiobook-authors-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-audiobook-authors-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-audiobook-authors-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-audiobook-authors-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-audiobook-authors-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-audiobook-authors-delete--id-" data-method="POST"
      data-path="api/audiobook-authors/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-audiobook-authors-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-audiobook-authors-delete--id-"
                    onclick="tryItOut('POSTapi-audiobook-authors-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-audiobook-authors-delete--id-"
                    onclick="cancelTryOut('POSTapi-audiobook-authors-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-audiobook-authors-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/audiobook-authors/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-audiobook-authors-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-audiobook-authors-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-audiobook-authors-delete--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-audiobook-authors-toggle--id-">POST api/audiobook-authors/toggle/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-audiobook-authors-toggle--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/audiobook-authors/toggle/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/toggle/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-audiobook-authors-toggle--id-">
</span>
<span id="execution-results-POSTapi-audiobook-authors-toggle--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-audiobook-authors-toggle--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-audiobook-authors-toggle--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-audiobook-authors-toggle--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-audiobook-authors-toggle--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-audiobook-authors-toggle--id-" data-method="POST"
      data-path="api/audiobook-authors/toggle/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-audiobook-authors-toggle--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-audiobook-authors-toggle--id-"
                    onclick="tryItOut('POSTapi-audiobook-authors-toggle--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-audiobook-authors-toggle--id-"
                    onclick="cancelTryOut('POSTapi-audiobook-authors-toggle--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-audiobook-authors-toggle--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/audiobook-authors/toggle/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-audiobook-authors-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-audiobook-authors-toggle--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-audiobook-authors-toggle--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the toggle. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-audiobook-authors-reorder">POST api/audiobook-authors/reorder</h2>

<p>
</p>



<span id="example-requests-POSTapi-audiobook-authors-reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api.librorabookofficial.win/api/audiobook-authors/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.librorabookofficial.win/api/audiobook-authors/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-audiobook-authors-reorder">
</span>
<span id="execution-results-POSTapi-audiobook-authors-reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-audiobook-authors-reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-audiobook-authors-reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-audiobook-authors-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-audiobook-authors-reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-audiobook-authors-reorder" data-method="POST"
      data-path="api/audiobook-authors/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-audiobook-authors-reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-audiobook-authors-reorder"
                    onclick="tryItOut('POSTapi-audiobook-authors-reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-audiobook-authors-reorder"
                    onclick="cancelTryOut('POSTapi-audiobook-authors-reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-audiobook-authors-reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/audiobook-authors/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-audiobook-authors-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-audiobook-authors-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
