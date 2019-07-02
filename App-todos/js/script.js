
var listElement = document.querySelector('#app ul');
var inputElement = document.querySelector('#app input');
var buttonElement = document.querySelector('#app button');



var todos = JSON.parse( localStorage.getItem('list_todos')) || [];

function randerTodos(){
    listElement.innerHTML = '';
    for(todo of todos){
        var todoElement = document.createElement('li');
        var todoText = document.createTextNode(todo);

        var linkElement = document.createElement('a');
        var pos = todos.indexOf(todo);
        linkElement.setAttribute('onclick', 'deleteTodo('+ pos +')');


        var linkText = document.createTextNode('Excluir');
        linkElement.appendChild(linkText);
        linkElement.setAttribute('href', '#');

        todoElement.appendChild(todoText);
        todoElement.appendChild(linkElement);
        listElement.appendChild(todoElement);


    }

}

randerTodos();

function addTodo(){
    var todoText = inputElement.value;
    todos.push(todoText);
    inputElement.value = '';
    randerTodos();
    saveToStorage();


}
buttonElement.onclick = addTodo;


function deleteTodo(pos){
    todos.splice(pos,1);
    randerTodos();
    saveToStorage();
}


// salvar a lista de todo no storage
function saveToStorage(){
    
    localStorage.setItem('list_todos', JSON.stringify(todos));

}