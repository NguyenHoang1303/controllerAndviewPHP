<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Form information</h1>
<form action="/data-handle/form" method="post">
    @csrf
    <div>
        event name<input type="text" name="eventName">
    </div>
    <div>
        band name<input type="text" name="bandName">
    </div>
    <div>
        start date <input type="date" name="startDate">
    </div>
    <div>
        end date <input type="date" name="endDate">
    </div>
    <div>
        portfolio <input type="text" name="portfolio">
    </div>
    <div>
        ticketPrice <input type="number" name="ticketPrice">
    </div>
    <div>
        <label for="cars">Status:</label>
        <select name="status" >
            <option value="1">Đang diễn ra</option>
            <option value="2">Sắp diễn ra</option>
            <option value="3">Đã diễn ra</option>
            <option value="0">Tạm hoãn</option>
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>
</body>
</html>
