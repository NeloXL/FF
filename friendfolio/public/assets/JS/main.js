const openModal1 = document.getElementById('openModal')
const openModal2 = document.getElementById('openModal2')
const closeModal = document.getElementById('closeModal')
const modal = document.getElementById('modal')
openModal1.addEventListener('click',() =>{
    modal.showModal()
    document.body.classList.add('lock');
})
openModal2.addEventListener('click',() =>{
    modal.showModal()
    document.body.classList.add('lock');
})
closeModal.addEventListener('click', () =>{
    modal.close()
    document.body.classList.remove('lock');
})
modal.addEventListener('click', (e) =>{
    const modal = e.currentTarget
     const isClickOnBackDrop = e.target === modal
    if (isClickOnBackDrop){
        modal.close()
        document.body.classList.remove('lock');
    }
})
