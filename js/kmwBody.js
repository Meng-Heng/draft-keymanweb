const draggableItem = document.querySelector('.item-2')

draggableItem.addEventListener('mousedown', (e) => {
    e.preventDefault();

    const startX = e.clientX
    console.log("X: " + startX)
    const startY = e.clientY
    console.log("Y: " + startY)
    const rect = draggableItem.getBoundingClientRect()
    console.log("Rectangle: " + rect)
    const offsetX = startX - rect.left
    console.log("Offset X: " + offsetX)
    const offsetY = startY - rect.top
    console.log("Offset Y: " + offsetY)

    const onMouseMove = (event) => {
        const x = event.clientX - offsetX
        const y = event.clientY - offsetY

        // alert("Mouse Move X: " + x)
        // console.log("Mouse Move Y: " + y)

        draggableItem.style.left = `${x}px`
        draggableItem.style.top = `${y}px`
    }

    const onMouseUp = (event) => {
        document.removeEventListener('mousemove', onMouseMove)
        document.removeEventListener('mouseup', onMouseUp)
    }

    document.addEventListener('mousemove', onMouseMove)
    document.addEventListener('mouseup', onMouseUp)
})