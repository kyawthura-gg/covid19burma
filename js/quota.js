window.setInterval(function() {
    var quotes = [
        {
            text: "လက်ကို ဆပ်ပြာနှင့် ရေဖြင့် မကြာခဏဆေးကြောပါ။"
        },
        {
            text: "လိုအပ်နေသူများကို ကူညီပါ။"
        },
        {
            text: "တစ်ကိုယ် ရေသန်. ရှင်းမှု ဂရုပြုဆောင်ရွက်၊ ကောင်းစွာ အိပ်စက်အနားယူ ပါ"
        },
        {
            text:
                "အကယ်၍ သင်ချောင်းဆိုးလျှင် သို့မဟုတ် နှာချေလျှင် mask တပ်ထားပါ။"
        }
    ];
    var quote = quotes[Math.floor(Math.random() * quotes.length)];
    document.getElementById("quote").innerHTML =
        "<p style='color:#c9c9f5'>" + quote.text + "</p>";
}, 3000);
