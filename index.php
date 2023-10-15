<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Rural Solution Hub</title>
    <!-- <link rel="stylesheet" type="text/css" href="./css/styles.css" /> -->
    <!-- Latest compiled and minified CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <style>
      .container {
        display: flex;
        flex-direction: row;
      }
      .left {
        flex: 70%;
      }
      .right {
        flex: 30%;
        padding: 20px;
      }
      @media screen and (max-width: 992px) {
      .container .left {
        display: none;
      }
      .container .right {
        margin-top: 20px;
        border: 2px solid black;
      }
    }
    </style>
  </head>

  <body class="bg-light">
    <div class="container">
      <div class="left">
        <img
          style="padding-top: 50px"
          src="https://www.con10u2farm.com/wp-content/uploads/2016/07/sustainable.jpg"
          alt="Rural Solution Hub"
          width="100%"
        />
        <!-- <img
          style="padding-top: 50px"
          src="https://www.bmel.de/SharedDocs/Bilder/EN/_Rural-Regions/bule_visual_allgemein-EN.jpg;jsessionid=			 	4AE915F1245C5AF4AE762A1C50DAC3B7.live841?__blob=wide&v=2"
          alt="Rural Solution Hub"
          width="100%"
          height="600"
        /> -->

      </div>
      <div class="right">
        <div class="py-2 text-center">
          <!-- <img class="d-block mx-auto mb-4" src="https://www.raghwendra.com/blog/wp-content/uploads/2018/09/logo-rwsn.png" alt="" width="240" height="64"> -->
          <h4><u>RURAL SOLUTION HUB </u></h4>
          <!-- <p class="lead">Below is an example form How to connect HTML to database with MySQL using PHP? An example</p> -->
        </div>
        <fieldset>
          <form
            class="needs-validation"
            method="post"
            action="upload.php"
            enctype="multipart/form-data"
          >
          <label class="form-check-label h6"> Problem Types: <span style="color:red">*</span></label>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="agriculture"
                name="problems[]"
                required
              />
              <label class="form-check-label"> Agriculture </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="health"
                name="problems[]"
                required
              />
              <label class="form-check-label"> Health </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="water"
                name="problems[]"
              />
              <label class="form-check-label"> Water </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="transport"
                name="problems[]"
              />
              <label class="form-check-label"> Transport </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="education"
                name="problems[]"
              />
              <label class="form-check-label"> Education </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="municipality"
                name="problems[]"
              />
              <label class="form-check-label"> Municipality </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="electricity"
                name="problems[]"
              />
              <label class="form-check-label"> Electricity </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="others" />
              <label class="form-check-label"> Others </label>
            </div>
            <p>
              <label class="h6">Problems: <span style="color:red">*</span></label>
              <textarea
                name="problem"
                class="form-control"
                placeholder="Please enter about problems..."
                required
              ></textarea>
            </p>
            <p>
              <input
                type="button"
                value="Start recording"
                class="btn btn-primary btn-sm"
              />
            </p>
            <div>
              <label class="form-label h6">Problem Image: <span style="color:red">*</span></label>
              <input type="file" name="my_image" required />
            </div>
            <p>
              <label class="h6">Address: <span style="color:red">*</span></label>
              <textarea
                name="address"
                class="form-control"
                placeholder="Please enter full address.."
                required
              ></textarea>
            </p>
            <p>
              <input
                type="submit"
                name="submit"
                value="Submit"
                class="btn btn-primary btn-md btn-block"
              />
              <input
                type="reset"
                name="reset"
                value="Reset"
                class="btn btn-danger btn-md btn-block"
              />
            </p>
          </form>
        </fieldset>
      </div>
    </div>

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>
