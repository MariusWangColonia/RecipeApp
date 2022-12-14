/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';


// Ingredient form

var addIngredientLink = document.createElement('button');
addIngredientLink.classList.add('add_item_link"');
addIngredientLink.href='#';
addIngredientLink.className = "btn btn-dark mb-3";
addIngredientLink.innerText='Add a new ingredient to your recipe';
addIngredientLink.dataset.collectionHolderClass='ingredients';

const addIngredientFormDeleteLink = (item) => {
    const removeFormButton = document.createElement("button");
    removeFormButton.innerText = "delete";
    removeFormButton.className = 'btn btn-outline-danger'

    item.append(removeFormButton);

    removeFormButton.addEventListener("click", (e) => {
        e.preventDefault();
        item.remove();
    })
}



const liIngredient = document.createElement('li').append(addIngredientLink);

document.querySelectorAll('ul.ingredients li').forEach((ingredient) => addIngredientFormDeleteLink(ingredient));

const collectionHolderIngredient = document.querySelector('ul.ingredients');

try {
    collectionHolderIngredient.appendChild(addIngredientLink) == null;
} catch (e) {
    null
}






const addFormToCollectionIngredient = (e) => {
    const collectionHolderIngredient = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
    e.preventDefault();
    const item = document.createElement('li');

    item.innerHTML = collectionHolderIngredient
        .dataset
        .prototype
        .replace(
            /__name__/g,
            collectionHolderIngredient.dataset.index
        );

    collectionHolderIngredient.appendChild(item);

    addIngredientFormDeleteLink(item);

    collectionHolderIngredient.dataset.index++;
}

addIngredientLink.addEventListener("click", addFormToCollectionIngredient)

// Description Form

var addDescriptionLink = document.createElement('button');
addDescriptionLink.classList.add('add_item_link"');
addDescriptionLink.href='#';
addDescriptionLink.className = "btn btn-dark mb-3";
addDescriptionLink.innerText='Add a new step to your recipe';
addDescriptionLink.dataset.collectionHolderClass='descriptions';

const addDescriptionsFormDeleteLink = (item) => {
    const removeFormButton = document.createElement("button");
    removeFormButton.innerText = "delete";
    removeFormButton.className = 'btn btn-outline-danger'

    item.append(removeFormButton);

    removeFormButton.addEventListener("click", (e) => {
        e.preventDefault();
        item.remove();
    })
}



document.querySelectorAll('ol.descriptions li').forEach((description) => addDescriptionsFormDeleteLink(description));

const collectionHolderDescription = document.querySelector('ol.descriptions');
try {
    collectionHolderDescription.appendChild(addDescriptionLink);
} catch (e) {
    null
}


const addFormToCollectionDescription = (e) => {
    e.preventDefault();
    const collectionHolderDescription = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

    const item = document.createElement('li');

    item.innerHTML = collectionHolderDescription
        .dataset
        .prototype
        .replace(
            /__name__/g,
            collectionHolderDescription.dataset.index
        );

    collectionHolderDescription.appendChild(item);
    addDescriptionsFormDeleteLink(item);

    collectionHolderDescription.dataset.index++;
}

addDescriptionLink.addEventListener("click", addFormToCollectionDescription)