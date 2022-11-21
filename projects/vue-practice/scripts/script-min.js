console.clear();const ifYouWant=new Vue({el:"#vue-app-context",data:function(){return{username:"",message:"",outputStyle:"none"}},methods:{update(e){e.preventDefault(),this.username?(this.outputStyle="yay",this.message=`Hello, ${this.username}, nice to meet you!`):(this.outputStyle="nay",this.message="Please enter your name")}},computed:{anAutomaticallUpdatedProperty(){}}}),drive=new Vue({el:"#drive-app",data:function(){return{age:"",message:"",outputStyle:"none"}},methods:{update(e){e.preventDefault(),this.age>=16?(this.something="Yes.",this.outputStyle="yay",this.message=`You are ${this.age} years old, enough to legally drive.`):(this.something="...",this.outputStyle="nay",this.message="You are not old enough to legally drive.")}}}),area=new Vue({el:"#area-app",data:function(){return{length:"",width:"",message:"",outputStyle:"none"}},methods:{update(e){if(e.preventDefault(),this.length&&this.width){var t=parseInt(this.length)*parseInt(this.width);this.outputStyle="yay",this.message=`The area of a room with those dimensions is ${t} feet.`}else this.outputStyle="nay",this.message="Nope. Try again"}}}),count=new Vue({el:"#count-string-app",data:function(){return{phrase:"",message:"",outputStyle:"none"}},methods:{update(e){if(e.preventDefault(),this.phrase){var t=this.countString(this.phrase);this.outputStyle="yay",this.message=`The phrase ${this.phrase} has ${t} characters.`}else this.outputStyle="nay",this.message="Nope. Try again"},countString(e){let t=0;for(i=0;i<e.length;i++){" "!=e[i]&&t++}return t}}}),interest=new Vue({el:"#interest-app",data:function(){return{principal:"",interest:"",time:"",message:"",outputStyle:"none"}},methods:{update(e){if(e.preventDefault(),this.principal&&this.interest&&this.time){var t=this.calculate(this.principal,this.time,this.interest);this.outputStyle="yay",this.message=`After ${this.time} years at ${this.interest}% interest, the investment will be worth ${t}.`}else this.outputStyle="nay",this.message="Nope. Try again"},calculate(e,t,s){let a=parseInt(s)/100;return parseFloat(e).toFixed(2).replace(/[.,]00$/,"")*(1+parseFloat(a).toFixed(2).replace(/[.,]00$/,"")*parseFloat(t).toFixed(2).replace(/[.,]00$/,""))}}}),madlib=new Vue({el:"#madlib-app",data:function(){return{noun:"",verb:"",adverb:"",adjective:"",message:"",outputStyle:"none"}},methods:{update(e){e.preventDefault(),this.noun&&this.verb&&this.adverb&&this.adjective?(this.outputStyle="yay",this.message=`${this.noun} is ${this.verb} ${this.adverb}  while maintaining ${this.adjective} poise!`):(this.outputStyle="nay",this.message="Nope. Try again")}}}),paint=new Vue({el:"#paint-app",data:function(){return{length:"",width:"",message:"",outputStyle:"none"}},methods:{update(e){if(e.preventDefault(),this.length&&this.width){var t=parseInt(this.length)*parseInt(this.width),s=Math.ceil(t/350);this.outputStyle="yay",this.message=`The ceiling of the room is ${t} feet. You'll need ${s} gallons to cover the entire ceiling`}else this.outputStyle="nay",this.message="Nope. Try again"}}}),login=new Vue({el:"#login-app",data:function(){return{username:"",password:"",message:"",outputStyle:"none"}},methods:{update(e){e.preventDefault();let t=$usernameInput.value,s=$passwordInput.value;this.username==t&&this.password==s?(this.outputStyle="yay",this.message="You're logged in! Welcome!"):(this.outputStyle="nay",this.message="Wrong Something..")}}}),quote=new Vue({el:"#quote-app",data:function(){return{author:"",quote:"",message:"",outputStyle:"none"}},methods:{update(e){e.preventDefault(),this.author&&this.quote?(this.author=capitalizeFirstLetter(this.author),this.outputStyle="yay",this.message=`${author} said “${quote}” `):(this.outputStyle="nay",this.message="Nope. Try again.")}}}),retire=new Vue({el:"#retire-app",data:function(){return{age:"",retireAge:"",message:"",outputStyle:"none"}},methods:{update(e){if(e.preventDefault(),this.age&&this.retireAge){var t=parseInt(this.retireAge)-parseInt(this.age);var s=(new Date).getFullYear(),a=s+t;this.outputStyle="yay",this.message=`${t} years left until you can retire. It's ${s}, so you can retire in ${a} `}else this.outputStyle="nay",this.message="Nope. Try again."}}}),checkout=new Vue({el:"#checkout-app",data:function(){return{quantityOne:"",quantityTwo:"",priceOne:"",priceTwo:"",message:"",outputStyle:"none"}},methods:{update(e){if(e.preventDefault(),this.quantityOne&&this.quantityTwo&&this.priceOne&&this.priceTwo){var t=parseInt(this.quantityOne)*parseInt(this.priceOne),s=parseInt(this.quantityTwo)*parseInt(this.priceTwo);parseInt(t,10),parseInt(s,10);this.outputStyle="yay",this.message=`${ageDifference} years left until you can retire. It's ${currentYear}, so you can retire in ${retireYear} `}else this.outputStyle="nay",this.message="Nope. Try again."}}}),math=new Vue({el:"#math-app",data:function(){return{numOne:"",numTwo:"",message:"",outputStyle:"none"}},methods:{update(e){if(e.preventDefault(),this.numOne&&this.numTwo){var t=parseFloat(this.numOne)*parseFloat(this.numTwo),s=parseFloat(this.numOne)/parseFloat(this.numTwo),a=parseFloat(this.numOne)+parseFloat(this.numTwo),i=parseFloat(this.numOne)-parseFloat(this.numTwo);this.outputStyle="yay",this.message=`${this.numOne} + ${this.numTwo} = ${a}\n                ${this.numOne} - ${this.numTwo} = ${i}\n                ${this.numOne} x ${this.numTwo} = ${t}\n                ${this.numOne} / ${this.numTwo} = ${s}\n                `}else this.outputStyle="nay",this.message="Nope. Try again."}}});