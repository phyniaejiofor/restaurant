

# Phynia's Tasty Bites

This is a website that allows for online ordering of meals

Welcome, and thank you for contributing to this project. Please take your time to study this document carefully before making any changes to the codebase, to ensure you're on the same page with the rest of the team and we can all collaborate seamlessly.

## Set up and Contribution
<p>To set up this project, first fork this repositiory to your own account</p>

```bash
locate fork button and click on it
```
<p>Then go to your local machine and create a new folder with either the repository name or any name of your choice </p>

Then right click and gitbash in the folder you created but make sure you have git installed

Make the folder a git folder by running this command

```bash
git init
```

set up your origin and upstream by running the following commands

```bash
git remote add origin https://github.com/{YOUR GITHUB USERNAME}/restaurant.git
git remote upstream add upstream https://github.com/phyniaejiofor/restaurant.git
```

pull the code to your project directory and set it up by running the following commands
```bash
git pull upstream
git checkout development
```
Then after contributing on a specified issue and wants to push,run the following commands

```python
git add -A
git commit -a -m"YOUR COMMIT MESSAGE"
git pull upstream development
git push origin development
```
Then from your development branch,you can create a pull request to Phyniaejiofor development branch

## Thanks for contributing