<!DOCTYPE html>
<html lang="en">
<head>

    <title>MMS</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet"> -->
    <link href='../styles.css' rel='stylesheet'>

</head>
<body>
	<h2>Macro Meal Splitter</h2>

	<form method='GET' action='p2Logic.php'>

		<label for="calories">Daily Calories</label>
        <input type="number" id="calories" name="user_calories" min="100" max="5000" step="100">

        <label for="protein">Protein</label>
        <input type="number" id="protein" name="user_pro" min="5" max="100" step="5">
        <i>%</i>

        <label for="fat">Fat</label>
        <input type="number" id="fat" name="user_fat" min="5" max="100" step="5">
        <i>%</i>

        <label for="carbs">Carbohydrates</label>
        <input type="number" id="carbs" name="user_crb" min="5" max="100" step="5">
        <i>%</i>

        <fieldset>
            <legend>Select when you workout</legend>
            <label><input type='radio' name='tod' value='morning'> Morning</label>
            <label><input type='radio' name='tod' value='afternoon'> Afternoon</label>
            <label><input type='radio' name='tod' value='evening'> Evening</label>
        </fieldset>

        <label for='nmeals'>Select number of meals</label>
        <select name='nmeals' id='nmeals'>
            <option value='choose'>Choose one...</option>
            <option value='1' >1</option>
            <option value='2' >2</option>
            <option value='3' >3</option>
            <option value='4' >4</option>
            <option value='5' >5</option>
            <option value='6' >6</option>
            <option value='7' >7</option>
        </select>

        <fieldset>
            <legend>Eat before workout?</legend>
            <label><input type='radio' name='eat' value='Y'> Yes</label>
            <label><input type='radio' name='eat' value='N'> No</label>
        </fieldset>

        <input type='submit' class='btn btn-primary btn-sm'>

    </form>
</body>
</html>