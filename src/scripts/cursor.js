

let coords = [0, 0]
const fan = document.querySelector('[data-fan]')

function update() {
  const [x, y] = coords
  fan.style.transform = `translate(${x}px, ${y}px)`
}

$(document).on('mousemove', ({ clientX, clientY }) => {
  coords = [clientX, clientY]
  requestAnimationFrame(update)
})
