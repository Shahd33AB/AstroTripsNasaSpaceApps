const canvas = document.getElementById('starfield');
const ctx = canvas.getContext('2d');

// Set canvas size to match the window
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const stars = [];

function createStar() {
  return {
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    radius: Math.random() * 2,
    color: 'rgba(255, 255, 255, ' + Math.random() + ')',
    velocity: Math.random() * 0.6,
  };
}

for (let i = 0; i < 1000; i++) {
  stars.push(createStar());
}

function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  stars.forEach((star) => {
    ctx.beginPath();
    ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
    ctx.fillStyle = star.color;
    ctx.fill();
    star.x -= star.velocity;
    if (star.x < 0) {
      star.x = canvas.width;
    }
  });

  requestAnimationFrame(animate);
}

animate();
