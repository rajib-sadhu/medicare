
alert("ALERT");
function questionBox(){
    var q1=document.getElementsByName('behaviour');
    var q2=document.getElementsByName('exe');
    var q3=document.getElementsByName('food');
    var q4=document.getElementsByName('injury');
    var q5=document.getElementsByName('cholesterol');
    var q6=document.getElementsByName('hypertension');
    var q7=document.getElementsByName('diabetes');
    var q8=document.getElementsByName('ow');

    //7tar besi hole
    if(q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        )
        {
            //alert("Check by Doctor Immidietly");
            const con="Visit Hospital Immidietly";
            localStorage.setItem("health",con); 
            localStorage.setItem("");

    return false;
        }
     //4 ter besi hole
    else if(q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked
         || q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q5[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q6[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q7[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q8[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q6[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q7[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q8[0].checked
         || q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked
         || q3[0].checked && q4[0].checked && q5[0].checked && q7[0].checked
         || q3[0].checked && q4[0].checked && q5[0].checked && q8[0].checked
         || q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked
         || q4[0].checked && q5[0].checked && q6[0].checked && q8[0].checked
        )
        {
            //alert("Check by Doctor");
            const con="Consult with Doctor";
            localStorage.setItem("health",con);
    return false;
        }
    //2tor besi hole
    else if (q1[0].checked && q2[0].checked || q1[0].checked && q3[0].checked 
        || q1[0].checked && q4[0].checked || q1[0].checked && q5[0].checked 
        || q1[0].checked && q6[0].checked || q1[0].checked && q7[0].checked 
        || q1[0].checked && q8[0].checked ||
        q2[0].checked && q3[0].checked || q2[0].checked && q4[0].checked 
        || q2[0].checked && q5[0].checked || q2[0].checked && q6[0].checked 
        || q2[0].checked && q7[0].checked || q2[0].checked && q8[0].checked ||
        q3[0].checked && q4[0].checked 
        || q3[0].checked && q5[0].checked || q3[0].checked && q6[0].checked 
        || q3[0].checked && q7[0].checked || q3[0].checked && q8[0].checked ||
        q4[0].checked && q5[0].checked || q4[0].checked && q6[0].checked 
        || q4[0].checked && q7[0].checked || q4[0].checked && q8[0].checked ||
        q5[0].checked && q6[0].checked 
        || q5[0].checked && q7[0].checked || q5[0].checked && q8[0].checked ||
        q6[0].checked && q7[0].checked || q6[0].checked && q8[0].checked ||
        q7[0].checked && q8[0].checked
    ) 
    {
        //alert("Rest in home");
        const con="Rest in home";
        localStorage.setItem("health",con);
    return false;
    }
    //sob thik thakle
    else
    {
        //alert("You are fine");
        const con="You are fine";
        localStorage.setItem("health",con);
    return false;
    }
    
    }
    
 