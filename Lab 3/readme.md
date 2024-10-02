# CSCI 2170 (Fall 2024) - Lab 2 - Form Processing

SOLUTION

## Overview

In this lab, we have extended the webpage from Lab 1 by adding a form and processing the input using PHP. The form collects the user's name, email, a message, and their preferred product category.

## Form Fields

- Name: Required text input for the user's name.
- Email: Required email input that is validated to ensure proper format.
- Message: Required textarea for the user's message.
- Product Category: A required text input field for the product category.

## Processing

The form is submitted using POST method to `form-processing.php`, which handles the following:

- Captures the form data.
- Sanitizes and validates the inputs.
- Saves the data to a CSV file (`data-file.csv`).
- Displays a confirmation message along with the submitted data.

## Data Storage

Form data is stored in a CSV file (`files/data-file.csv`). Each submission is appended to the file, ensuring previous entries are not overwritten.

## Usage

- Copy all files to the appropriate directory.
- Ensure the `files/` directory is writable.
- Test the form by submitting data and verifying that the CSV is correctly updated.

## References/Citations

1. 