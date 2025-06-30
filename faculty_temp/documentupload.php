<?php
include_once("../dboperation.php");
$obj = new dboperation();
$sqlquery = "SELECT * FROM tbl_subject";
$result = $obj->executequery($sqlquery);
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document Upload Form</title>
  <style>
    /* Reset default margin and padding */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* General body styles */
    body {
      font-family: "Inter", sans-serif;
      background-color: #f5f7fb;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Container styling */
    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }

    /* Form wrapper styles */
    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 550px;
      width: 100%;
      background: white;
      padding: 20px; /* Added padding for better spacing */
      border-radius: 8px; /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    /* Heading styling */
    .formbold-form-title {
      font-weight: 600;
      font-size: 24px;
      color: #07074d;
      margin-bottom: 20px;
    }

    /* Form label styling */
    .formbold-form-label {
      display: block;
      font-weight: 500;
      font-size: 16px;
      color: #07074d;
      margin-bottom: 12px;
    }

    /* Input and select styling */
    .formbold-form-input,
    .formbold-select {
      width: 100%;
      padding: 12px 24px;
      border-radius: 6px;
      border: 1px solid #e0e0e0;
      background: white;
      font-weight: 500;
      font-size: 16px;
      color: #6b7280;
      outline: none;
    }

    .formbold-form-input:focus,
    .formbold-select:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    /* Dropdown arrow styling */
    .formbold-select-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .formbold-select-wrapper::after {
      content: '▼'; /* Arrow character */
      position: absolute;
      right: 16px;
      font-size: 16px;
      color: #6b7280;
      pointer-events: none;
    }

    /* Button styling */
    .formbold-btn {
      text-align: center;
      font-size: 16px;
      border-radius: 6px;
      padding: 14px 32px;
      border: none;
      font-weight: 600;
      background-color: #6a64f1;
      color: white;
      cursor: pointer;
    }

    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    /* Margin and padding utilities */
    .formbold-mb-5 {
      margin-bottom: 20px;
    }

    .formbold-pt-3 {
      padding-top: 12px;
    }
  </style> 
</head>
<body>
  <div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
      <form action="docuploadaction.php" method="POST" enctype="multipart/form-data">
        <h1 class="formbold-form-title">Upload Your Document Here</h1>
        <div class="formbold-mb-5">
          <label for="name" class="formbold-form-label">
            Name of the Document:
          </label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Document name"
            class="formbold-form-input"
          />
        </div>
        <div class="formbold-mb-5">
          <label for="category" class="formbold-form-label">
            Category:
          </label>
          <select id="category" name="category" class="formbold-select">
            <option value="Null">Select Document Category</option>
            <option value="QuestionPapers">Question Papers</option>
            <option value="HandWrittenNotes">Hand Written Notes</option>
            <option value="NotesDocument">Notes Document</option>
            <option value="ImportantTopics">Important Topics</option>
          </select>
        </div>
        <div class="formbold-mb-5">
          <label for="subject_id" class="formbold-form-label">
            Subject Name
          </label>
          <div class="formbold-select-wrapper">
            <select id="subject_id" name="subject" class="formbold-select">
              <option value="">Select subject</option>
              <?php
              while ($display = mysqli_fetch_array($result)) {
                echo '<option value="' . $display["subject_id"] . '">' . $display["subject_name"] . '</option>';
              }
              ?>
            </select>
          </div>
        </div>
        <div class="formbold-mb-5">
          <label for="exampleInputimg" class="formbold-form-label">
            Upload Document
          </label>
          <input type="file" id="exampleInputimg" name="document" class="formbold-form-input" />
        </div>
        <div>
          <input type='submit' class="formbold-btn w-full" value="Submit">
          <button> <a href="index.php" class="formbold-btn b-full">Go Back</a></button>
           
        </div>
      </form>
    </div>
  </div>
</body>
</html>
