var ringer = {
    countdown_to: "6/21/2023 17:00",
    rings: {
      'DAYS': {
        s: 86400000, // milliseconds in a day,
        max: 365
      },
      'HOURS': {
        s: 3600000, // milliseconds per hour,
        max: 24
      },
      'MINUTES': {
        s: 60000, // milliseconds per minute
        max: 60
      },
      'SECONDS': {
        s: 1000,
        max: 60
      }
    },
    r_count: 4,
    r_spacing: 10, // px
    r_size: 100, // px
    r_thickness: 5, // px
    update_interval: 11, // ms
  
    init: function () {
      $r = ringer;
      $r.cvs = document.createElement('canvas');
  
      $r.size = {
        w: ($r.r_size + $r.r_thickness) * $r.r_count + ($r.r_spacing * ($r.r_count - 1)),
        h: ($r.r_size + $r.r_thickness)
      };
  
      $r.cvs.setAttribute('width', $r.size.w);
      $r.cvs.setAttribute('height', $r.size.h);
      $r.ctx = $r.cvs.getContext('2d');
      $(".countdownwrap").append($r.cvs);
      $r.cvs = $($r.cvs);
      $r.ctx.textAlign = 'center';
      $r.actual_size = $r.r_size + $r.r_thickness;
      $r.countdown_to_time = new Date($r.countdown_to).getTime();
      $r.cvs.css({ width: $r.size.w + "px", height: $r.size.h + "px" });
      $r.go();
    },
    ctx: null,
    go: function () {
      var idx = 0;
  
      $r.time = Math.max(($r.countdown_to_time - new Date().getTime()), 0);
  
      if ($r.time === 0) {
        // Countdown has ended, set all values to 0
        for (var r_key in $r.rings) {
          $r.unit(idx++, r_key, { s: 1, max: 1 });
        }
      } else {
        // Countdown is still ongoing
        for (var r_key in $r.rings) {
          $r.unit(idx++, r_key, $r.rings[r_key]);
        }
        setTimeout($r.go, $r.update_interval);
      }
    },
    unit: function (idx, label, ring) {
      var x, y, value, ring_secs = ring.s;
      value = parseInt($r.time / ring_secs);
      $r.time -= value * ring_secs;
  
      x = ($r.r_size * .5 + $r.r_thickness * .5);
      x += +(idx * ($r.r_size + $r.r_spacing + $r.r_thickness));
      y = $r.r_size * .5;
      y += $r.r_thickness * .5;
  
      // calculate arc end angle
      var degrees = 360 - (value / ring.max) * 360.0;
      var endAngle = degrees * (Math.PI / 180);
  
      $r.ctx.save();
      $r.ctx.translate(x, y);
      $r.ctx.clearRect($r.actual_size * -0.5, $r.actual_size * -0.5, $r.actual_size, $r.actual_size);
  
      // first circle
      $r.ctx.strokeStyle = "rgba(128, 128, 128, 0.2)";
      $r.ctx.beginPath();
      $r.ctx.arc(0, 0, $r.r_size / 2, 0, 2 * Math.PI, 2);
      $r.ctx.lineWidth = $r.r_thickness;
      $r.ctx.stroke();
  
      // second circle
      $r.ctx.strokeStyle = "rgba(153, 110, 109, 1)";
      $r.ctx.beginPath();
      $r.ctx.arc(0, 0, $r.r_size / 2, 0, endAngle, 1);
      $r.ctx.lineWidth = $r.r_thickness;
      $r.ctx.stroke();
  
      // label
      $r.ctx.fillStyle = "#000000";
      $r.ctx.font = '12px Helvetica';
      $r.ctx.fillText(label, 0, 23);
      $r.ctx.fillText(label, 0, 23);
  
      $r.ctx.font = 'bold 40px Helvetica';
      $r.ctx.fillText(value > 0 ? Math.floor(value) : 0, 0, 10);
  
      $r.ctx.restore();
    }
  };
  
  ringer.init();
  