function showTime(){
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    am_pm = "AM";

    let day = time.getDay();

    let date = time.getDate();
    let month = time.getMonth();
    let year = time.getFullYear();


    let monthname = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"
    ];

    let week = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday","Saturday"
    ];

    if(hour > 12){
        am_pm = "PM";
        hour -=12;
    }
    if(hour == 0){
        hor = 12;
        am_pm = "AM";
    }

    hour = (hour<10)?"0" + hour : hour;
    sec = (sec<10)?"0" + sec : sec;
    min = (min<10)?"0" + min : min;
 
    // let currentTime = hour + ":" + min + ":" + 
    // sec + " " +"<small>" + am_pm +  " " + 
    // week[day] + "<br>" +date + "/" + month + "/" + 
    // year + "</small>";
    // document.getElementById("clock").innerHTML = currentTime;

    document.getElementById("hr").innerHTML = hour;
    document.getElementById("min").innerHTML = min;
    document.getElementById("sec").innerHTML = sec;
    document.getElementById("ampm").innerHTML = am_pm;

    document.getElementById("day").innerHTML = week[day];
    document.getElementById("date").innerHTML = date;
    document.getElementById("month").innerHTML = monthname[month];
    document.getElementById("year").innerHTML = year;

}


setInterval(showTime,1000);