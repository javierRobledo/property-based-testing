const saved = {};

const save = (person) => {
    saved[person.id] = person;
}

const findById = (id) => saved[id];

export default {
    save,
    findById,
};