// slider 1 





$('#slide-testimonal').owlCarousel({
	margin: 0,
	center: true,
	loop: true,
	nav: true,
	responsive: {
	0: {
	   items: 1
	},
	768: {
	   items: 2,
	margin: 15,
	},
	1000: {
	   items: 3,
	}
    }
});



// slider 2  develper description
$('.owl-carousel').owlCarousel({
  stagePadding: 50,
  loop:true,
  margin:10,
  nav:false,
  dots:false,
 items:3,
 margin:50,
 responsive: {
  0: {
    items: 1
  },

  600: {
    items: 3
  },

  1024: {
    items: 4
  },

  1366: {
    items: 4
  }
}
})

// range slider 


$('.neumorphic-slider__thumb').on('mousedown', function(){
  $(document).on('mousemove.mm', function(e){
    var new_value = 0;
    if (e.clientX < $('.neumorphic-slider').offset().left) {
      new_value = '0%';
    } else if (e.clientX > $('.neumorphic-slider').offset().left + $('.neumorphic-slider').width() - 10) {
      new_value = '100%';
    } else {
      new_value = ((e.clientX - $('.neumorphic-slider').offset().left) / ($('.neumorphic-slider').width() - 10) * 100).toFixed(0) + '%';
    }
    document.documentElement.style.setProperty('--value', new_value);
    $('.neumorphic-slider__popover').text(new_value);
  });
  $(document).on('mouseup.mu', function(){
    $(document).off('mousemove.mm');
    $('.neumorphic-slider__thumb').off('mouseup.mu');
  });
});

//range slider end


// slider 4 start

$(".option").click(function(){
  $(".option").removeClass("active");
  $(this).addClass("active");
  
});

// slider 4 end 

// colapsible text 
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var content = this.nextElementSibling;
  if (content.style.display === "block") {
    content.style.display = "none";
  } else {
    content.style.display = "block";
  }
});
}





var options = {
    series: [{
    name: 'Website Blog',
    type: 'column',
    data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
  }, {
    name: 'Social Media',
    type: 'line',
    data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
  }],
    chart: {
        toolbar: {
            show: false,},
    height: 350,
    type: 'line',
  },
 grid: {
  row: {
      colors: ['#e5e5e5', 'transparent'],
      opacity: 0.5
  }, 
  column: {
      colors: ['#f8f8f8', 'transparent'],
  }, 
  xaxis: {
    lines: {
      show: true
    }
  }
},
dataLabels: {
    enabled: false
  },

  stroke: {
    width: [0, 4]
  },
  title: {
    text: 'Traffic Sources'
  },
  dataLabels: {
    enabled: true,
    enabledOnSeries: [1]
  },
  labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
  xaxis: {
    type: 'datetime'
  },
  yaxis: [{
    title: {
      text: 'Website Blog',
    },
  
  }, {
    opposite: true,
    title: {
      text: 'Social Media'
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();


  // localities owl carousel 

 
  

  

