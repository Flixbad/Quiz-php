# 🎮 Quiz en PHP - Jeux Vidéo

## 📜 Description
Ce projet est une application **Quiz/QCM** sur le thème des **jeux vidéo**, développée en **PHP** avec **Bootstrap** pour une interface moderne et responsive.

L'utilisateur entre son **pseudo** avant de commencer le quiz, répond aux questions, obtient un score final, et peut consulter les **corrections** de ses réponses ainsi que l'**historique des scores des précédents joueurs**.

---

## 🚀 Fonctionnalités
✅ **Formulaire de pseudo avant le quiz**  
✅ **Affichage des questions avec choix de réponse**  
✅ **Enchaînement dynamique des questions**  
✅ **Décompte des points et affichage du score final**  
✅ **Historique des scores des précédents joueurs** (stocké en JSON)  
✅ **Page séparée pour voir les corrections** avec réponses en rouge 🔴 si fausses et en vert ✅ si correctes  
✅ **Interface modernisée** avec **Bootstrap**  
✅ **Score en rouge si en dessous de la moyenne, en vert si au-dessus**  
✅ **Design responsive** pour mobile et ordinateur 


---

## 📂 Structure du projet

/Quiz ├── start.php  # Formulaire d'entrée du pseudo ├── index.php  # Page principale affichant les questions ├── process.php  # Traitement des réponses et mise à jour du score ├── result.php  # Affichage du score final et de l'historique des joueurs ├── answers.php  # Page affichant les corrections du quiz ├── questions.php  # Stocke les questions et réponses ├── scores.json  # Stocke l'historique des scores en JSON ├── /assets │ ├── /css │ │ ├── styles.css  # Fichier CSS personnalisé │ ├── /js │ │ ├── script.js  # Fichier JS pour effets interactifs ├── README.md

## Explication du projet


---

## 🎨 Technologies utilisées
- **PHP** (templating et gestion des scores)
- **Bootstrap** (design et responsive)
- **JavaScript** (interactivité)
- **Git & GitHub** (gestion de version)
- **JSON** (stockage des scores)

---

## 🔧 Installation et Utilisation
### **1️⃣ Cloner le projet**
```sh
git clone https://github.com/Flixbad/Quiz-php.git
cd Quiz
