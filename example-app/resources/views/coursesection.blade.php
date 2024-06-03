
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Year Section</title>
<style>
 body {
	background-image: url('img/logo.png') , url('img/1.jpg') , url('img/3.jpg');

	background-position: left, center, center;
	background-repeat: no-repeat;
	background-size:200px  ,1200px ,cover;
    margin-left: auto;
     margin-right: auto;
}
  .contact-form{
    max-width: 350px;
    margin: auto;
    border-radius: 5px;
    background:#b22222 ;
    padding:20px ;

  }
  input[type=text],select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display:inline-block ;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing:border-box ;
  }

  </style>
</head>

<body>
    @include('header')
    <div class="body"></div>
  <div class="contact-form">
    <form action="table">

      <label for ="courseyearsec">Course Year Section</label>
      <select id ="courseyearsec">
        <option value ="courseyearsec">Select--</option>
        <option value ="courseyearsec">DICT 1-1</option>
        <option value ="courseyearsec">DICT 1-2</option>
        <option value ="courseyearsec">DICT 1-3</option>
        <option value ="courseyearsec">DICT 1-4</option>
        <option value ="courseyearsec">DICT 1-5</option>
        <option value ="courseyearsec">DICT 2-1</option>
        <option value ="courseyearsec">DICT 2-2</option>
      </select>
      <label for ="Semester">Semester</label>
      <select id ="Semester">
      <option value ="Semester">Select--</option>
        <option value ="Semester">1ST Semester</option>
        <option value ="Semester">2ND Semester</option>
        <option value ="Semester">Select country</option>

      </select>
      <label for ="year">school year</label>
      <select id ="year">
        <option value ="year">select--</option>
        <option value ="year">2020-2021</option>
        <option value ="year">2021-2022</option>
        <option value ="year">2022-2023</option>

      </select>
    <input type ="submit" value ="submit">
    </form>

</body>

</html>
