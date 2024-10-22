  // Función para cargar el formulario en el div con ID 'content'
  function loadForm(formType) {
    let contentDiv = document.getElementById('content');
    if (!content) {
        console.error('El contenedor no fue encontrado');
        return;
    }
    
    if (formType === 'crear') {
        contentDiv.innerHTML = `
<div class="min-h-screen flex justify-center bg-gray-100">
<div class="bg-white/10 p-6 rounded-lg shadow-lg w-full">
<h2 class="text-2xl font-bold mt-6 text-center">Crear Nuevo Espacio</h2>
<form id="crear-espacio-form" class="space-y-4">
<div>
<label for="nombre" class="block text-sm font-medium text-gray-700">Nombre del Espacio</label>
<input type="text" id="nombre" name="nombre" placeholder="Ej. Sala de conferencias 1"
  class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
</div>
<div>
<label for="capacidad" class="block text-sm font-medium text-gray-700">Capacidad</label>
<input type="number" id="capacidad" name="capacidad" placeholder="Ej. 50"
  class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
</div>
<div>
<label for="tipo" class="block text-sm font-medium text-gray-700">Tipo de Espacio</label>
<select id="tipo" name="tipo" class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
  <option value="" disabled selected>Seleccione un tipo</option>
  <option value="sala_de_reuniones">Sala de reuniones</option>
  <option value="auditorio">Auditorio</option>
  <option value="espacio_al_aire_libre">Espacio al aire libre</option>
  <option value="laboratorio">Laboratorio</option>
</select>
</div>
<div>
<label for="ubicacion" class="block text-sm font-medium text-gray-700">Ubicación</label>
<input type="text" id="ubicacion" name="ubicacion" placeholder="Ej. Edificio A, Piso 3"
  class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
</div>
<div class="mt-4 flex space-x-2">
<button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">Crear</button>
<button type="reset" class="flex-1 bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">Cancelar</button>
</div>
</form>
</div>
</div>

`;

// Manejar el evento submit del formulario
document.getElementById('crear-espacio-form').addEventListener('submit', (e) => {
e.preventDefault(); // Evitar que la página se recargue
// Aquí puedes agregar la lógica para crear el espacio
console.log('Formulario enviado');
loadForm('visualizar');

});


    } else if (formType === 'modificar') {
        contentDiv.innerHTML = `<h2 class="text-2xl font-bold mb-4">Modificar Espacio</h2><p>Aquí va el formulario para modificar espacios.</p>`;
    } else if (formType === 'eliminar') {
        contentDiv.innerHTML = `<h2 class="text-2xl font-bold mb-4">Eliminar Espacio</h2><p>Aquí va la opción para eliminar espacios.</p>`;
    } else if (formType === 'visualizar') {
         // Obtener los datos del formulario
const nombre = document.getElementById('nombre').value;
const capacidad = document.getElementById('capacidad').value;
const ubicacion = document.getElementById('ubicacion').value;
const tipo = document.getElementById('tipo').value;

// Generar la tarjeta del espacio
const spaceCard = `
<div class="bg-white/10 p-6 rounded-lg shadow-lg">
<div class="space-image h-32 bg-gray-500 rounded-lg mb-4"></div>
<h3 class="text-xl font-bold">${nombre}</h3>
<p><i class="fas fa-map-marker-alt"></i> ${ubicacion}</p>
<p><i class="fas fa-users"></i> Capacity: ${capacidad} people</p>
<div class="mt-4 flex space-x-2">
  <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">View</button>
  <button class="flex-1 bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg">Reserve</button>
</div>
</div>
`;

// Agregar la tarjeta del espacio a la sección de visualización
contentDiv.innerHTML = `
<h2 class="text-2xl font-semibold mb-6 text-center">Available Spaces</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
${spaceCard}
</div>
`;
    }
}