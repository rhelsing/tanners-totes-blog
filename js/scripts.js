MyWidget = function(name_var) {
  this.init(name_var);
}

$.extend(MyWidget.prototype, {
   // object variables
   widget_name: '',

   init: function(widget_name) {
     // do initialization here
     this.widget_name = widget_name;
   },

   doSomething: function() {
     // an example object method
     console.log('my name is '+this.widget_name);
   }
});


// example of using the class built above
var widget1 = new MyWidget('widget one');
widget1.doSomething();