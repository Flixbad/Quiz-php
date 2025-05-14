# 🎮 Quiz en PHP - Jeux Vidéo (Version Arcade)

## 📜 Description
Ce projet est une application **Quiz/QCM** sur le thème des **jeux vidéo**, développée en **PHP** avec **Bootstrap**, et intégrant un **design rétro arcade** unique.  

L'utilisateur entre son **pseudo** avant de commencer le quiz, répond aux questions, obtient un score final, et peut consulter les **corrections** de ses réponses ainsi que l'**historique des scores des précédents joueurs**.  

---

## 🚀 Fonctionnalités
✅ **Interface rétro arcade** 🎨 avec effets néon et police pixelisée  
✅ **Fond personnalisé avec filtre semi-transparent**  
✅ **Formulaire de pseudo avant le quiz**  
✅ **Affichage des questions avec choix de réponse**  
✅ **Timer arcade animé (positionné en haut à droite)** ⏳  
✅ **Décompte des points et affichage du score final** 🏆  
✅ **Historique des scores des précédents joueurs** (stocké en JSON)  
✅ **Système avancé de correction** : voir **les réponses spécifiques à chaque joueur** 🔍  
✅ **Bouton "Voir les réponses" dans le tableau des scores**  
✅ **Retour arrière pour changer de joueur** ⬅️  
✅ **Effets lumineux et animations arcade** 


---

## 📂 Structure du projet

/Quiz ├── start.php  # Formulaire d'entrée du pseudo ├── index.php  # Page principale affichant les questions ├── process.php  # Traitement des réponses et mise à jour du score ├── result.php  # Affichage du score final et de l'historique des joueurs ├── answers.php  # Page affichant les corrections du quiz pour chaque joueur ├── questions.php  # Stocke les questions et réponses ├── scores.json  # Stocke l'historique des scores en JSON ├── /assets │ ├── /img │ │ ├── logo.png  # Logo du quiz │ │ ├── background.jpg  # Image de fond arcade │ ├── /css │ │ ├── styles.css  # Fichier CSS arcade │ ├── /js │ │ ├── script.js  # Fichier JS pour effets interactifs ├── README.md

## Explication du projet


---

## 🎨 Technologies utilisées
- **PHP** (gestion du quiz, sessions, traitement des scores)
- **Bootstrap** (design et responsive)
- **JavaScript** (timer, animations)
- **JSON** (stockage des scores et réponses des joueurs)
- **CSS avancé** (effets néon et interface arcade)
- **Git & GitHub** (gestion de version)

---

## 🔧 Installation et Utilisation
### **1️⃣ Cloner le projet**
```sh
git clone https://github.com/Flixbad/Quiz-php.git
cd Quiz
