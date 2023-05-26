function validateForm() {
  var note = parseFloat(document.forms['noteForm']['note'].value)
  if (isNaN(note) || note < 0 || note > 20) {
    alert('Veuillez entrer une note valide (entre 0,00 et 20,00).')
    return false
  }
}
