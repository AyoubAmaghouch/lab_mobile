---
name: marp-lab-presentation
description: Use when generating, adapting, or formatting any lab deliverable or technical assignment into a standardized Marp presentation.
---

# Marp Lab Presentation Skill

## Overview

Adapt and compile any completed technical task, lab deliverable, or technical assignment into a modern, standardized Marp presentation named `lab-<topic>.md`.

Every presentation must follow this mandatory structure:

1. Introduction
2. Stack / Technologies
3. Définition
4. Problématique
5. Solution

The skill enforces visual consistency, technical accuracy, relevant technical explanations, practical examples, and a consistent presentation format.

## When to Use

Use this skill when:

- Creating a final presentation for a technical lab, workshop, or assignment.
- Transforming code examples, debugging logs, or technical notes into a slide deck.
- Explaining a technical concept, problem, and its implementation.
- Standardizing lab presentations across different technical modules.

Do not use for:

- Writing internal task specifications (use `task-structuring` instead).
- Writing standalone multi-file documentation.
- Creating presentations unrelated to technical assignments.

## Mandatory Presentation Architecture

Every presentation must be delivered as one self-contained file named `lab-<topic>.md`.

The presentation must use valid Marp Markdown and follow this order:

1. Title slide
2. Lab Plan slide
3. Introduction
4. Stack / Technologies
5. Définition
6. Problématique
7. Solution
8. Practical implementation slides, when applicable
9. Summary and verification, when applicable

### Lab Plan

The Lab Plan slide must list these five sections exactly and in this order:

1. Introduction
2. Stack / Technologies
3. Définition
4. Problématique
5. Solution

For the Stack section, include only the technologies relevant to the current lab. Supported technologies include Laravel, Alpine.js, MySQL, JSON, Tailwind CSS, JavaScript, PHP Native, Kotlin, and Preline UI. These are examples of the supported stack, not a requirement to include all of them in every presentation.

Do not use the old Lab Plan items “Problems Encountered” or “Solutions Implemented.” Use “Problématique” and “Solution” instead.

### Section 1: Introduction

Briefly explain the lab context, objective, expected result, and technical scope.

### Section 2: Stack / Technologies

Present the technologies relevant to the lab. Explain each selected technology's role. Do not list technologies that are not relevant or supported by the assignment.

### Section 3: Définition

Define the main concepts related to the lab using accurate, concise explanations and relevant examples.

### Section 4: Problématique

Explain the actual technical problem or requirement addressed by the lab. Use the supplied assignment, code, logs, or evidence. Never invent errors or claim unsupported incidents. If the lab describes a requirement rather than a bug, express it as a clear technical question.

### Section 5: Solution

Present the proposed approach, implementation steps, commands, configuration, and relevant code examples. Explain how the solution addresses the problem. Include verification evidence only when available.

Preserve the original implementation's logic unless a correction is needed. Use complete runnable examples whenever possible. Declare the language on every code fence. Do not create external companion Markdown files or separate exercise files.

## Design & Formatting Standards

### 1. Frontmatter Configuration

Always begin the generated presentation with valid YAML frontmatter. Use this configuration:

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700&family=Fira+Code:wght@400;500&display=swap');

  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }

  h1, h2, h3 {
    font-family: 'Anton', 'Impact', sans-serif;
    color: #38bdf8;
    letter-spacing: 0.5px;
  }

  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }

  section.light h1,
  section.light h2,
  section.light h3 {
    color: #0284c7;
  }

  pre, code {
    background-color: #1e293b;
    color: #e2e8f0;
    border-radius: 6px;
    font-family: 'Fira Code', 'Consolas', monospace;
  }

  section.light pre,
  section.light code {
    background-color: #e2e8f0;
    color: #0f172a;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th {
    background-color: #0284c7;
    color: #ffffff;
    padding: 10px;
  }

  td {
    padding: 8px;
    border-bottom: 1px solid #334155;
  }

  section.light td {
    border-bottom: 1px solid #cbd5e1;
  }
---
```

### 2. Title Slide

The first slide must contain only the lab title.

Do not include author names, student IDs, organization names, dates, or decorative subtitles unless explicitly requested.

### 3. Slide Delimiters

- Use `---` on a separate line to separate slides.
- Keep the YAML frontmatter at the beginning of the file.
- Never omit a separator between slides.
- Never confuse YAML frontmatter delimiters with slide separators.

### 4. Visual Rhythm

- Alternate between dark and light slides when appropriate.
- Apply the light class using `<!-- _class: light -->` immediately after the slide separator.
- Maintain consistent typography, spacing, colors, and code formatting.
- Prioritize readability and technical clarity over decoration.
- Avoid overcrowding slides.
- Split dense content into multiple slides without changing the order of the five mandatory sections.

### 5. Code and Syntax

- Declare the language on every code fence.
- Never use unlabeled code blocks.
- Preserve correct syntax and indentation.
- Provide complete examples whenever possible.
- Explain necessary modifications to the original code.
- Use Markdown tables with explicit alignment markers such as `:---`, `:---:`, and `---:`.
- Ensure the Markdown remains compatible with Marp.

## Output Template: `lab-<topic>.md`

Use this structure as the minimum presentation outline. Add practical slides under the corresponding sections when necessary.

```markdown
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }

  h1, h2, h3 {
    color: #38bdf8;
  }

  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }

  section.light h1,
  section.light h2,
  section.light h3 {
    color: #0284c7;
  }
---

# [Lab Title Only]

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Stack / Technologies
3. Définition
4. Problématique
5. Solution

---

## 1. Introduction

- **Context:** Brief description of the lab.
- **Objective:** What the lab aims to achieve.
- **Expected result:** The intended outcome.

---

<!-- _class: light -->

## 2. Stack / Technologies

| Technology | Type | Role |
|:---|:---|:---|
| [Technology] | [Type] | [Role in the lab] |

Include only technologies relevant to the assignment.

---

## 3. Définition

### [Key Concept]

- **Definition:** Accurate explanation.
- **Purpose:** Why it matters.
- **Example:** A short, relevant example.

---

<!-- _class: light -->

## 4. Problématique

- **Initial situation:** Describe the starting point.
- **Problem:** State the actual issue or technical requirement.
- **Impact:** Explain the consequences.
- **Expected behavior:** Define the desired outcome.

Do not invent unsupported incidents.

---

## 5. Solution

### Implementation steps

1. [First step]
2. [Second step]
3. [Third step]

### Practical example

```javascript
function calculateTotal(items) {
  return items.reduce((sum, item) => sum + item.price, 0);
}
```

### Verification

| Objective | Status | Evidence |
|:---|:---:|:---|
| Implementation | Pending verification | Inspection or execution required |
| Problem resolution | Pending verification | Relevant test results |

Update the verification status only when evidence is available.
```

## Red Flags & Anti-Patterns

| Forbidden practice | Reason | Mandatory rule |
|:---|:---|:---|
| Using the old Lab Plan | Breaks structural consistency | Use Introduction, Stack / Technologies, Définition, Problématique, Solution |
| Using “Problems Encountered” as a main section | Conflicts with the required structure | Use “Problématique” |
| Using “Solutions Implemented” as a main section | Conflicts with the required structure | Use “Solution” |
| Omitting Stack / Technologies or Définition | Makes the structure incomplete | Include both sections |
| Listing every technology in every lab | Creates irrelevant content | Include only the applicable stack |
| Adding names or IDs to the title slide | Breaks title-slide consistency | Lab title only unless explicitly requested |
| Inventing technical problems | Reduces technical reliability | Use evidence or state a technical requirement |
| Claiming unverified tests passed | Misrepresents results | Report actual verification evidence |
| Omitting language tags on code fences | Reduces readability | Declare every code block's language |
| Creating separate exercise files | Fragments the deliverable | Keep the lab in one Markdown file |
| Producing overcrowded slides | Reduces readability | Split dense material into additional slides |
| Using invalid YAML or Markdown | Breaks Marp compatibility | Validate frontmatter and slide delimiters |

## Testing Protocol

Test the skill independently using Antigravity and GitHub Copilot in VS Code. Use the same technical assignment in both environments.

### Test 1: Standard Technical Lab

Provide a completed technical assignment with its objectives, implementation steps, and code.

Expected result:

- One `lab-<topic>.md` file.
- The Lab Plan lists Introduction, Stack / Technologies, Définition, Problématique, and Solution in that exact order.
- All five sections appear in the presentation in the same order.
- Only relevant technologies are listed.
- Practical examples are accurate.

### Test 2: Debugging Lab

Provide a real error, relevant source code, and the confirmed correction.

Expected result:

- A precise problem statement.
- A technically accurate explanation of the relevant concepts.
- A solution that addresses the observed problem.
- Verification status based on available evidence.

### Test 3: Incomplete Information

Provide an assignment with missing details or unverified test results.

Expected result:

- Missing information is identified.
- Unsupported details are not invented.
- Unverified tests remain marked as pending verification.

### Evaluation Matrix

| Criterion | Expected result |
|:---|:---|
| Structure | Introduction → Stack / Technologies → Définition → Problématique → Solution |
| Lab Plan | Introduction, Stack / Technologies, Définition, Problématique, Solution in order |
| Technical accuracy | No fabricated problems or solutions |
| Stack relevance | Only applicable technologies are included |
| Code quality | Correct, relevant examples |
| Visual consistency | Consistent navy and cyan design |
| Marp compatibility | Valid Markdown and YAML frontmatter |
| Verification | Results supported by evidence |
| Reusability | Adaptable to different technical assignments |

## Final Deliverable

Generate exactly one self-contained presentation file named `lab-<topic>.md`.

The presentation must be technically accurate, visually consistent, readable, and ready for Marp preview and export. The Lab Plan and the presentation sections must always follow this order:

1. Introduction
2. Stack / Technologies
3. Définition
4. Problématique
5. Solution

Additional practical implementation and verification slides are allowed after these sections when relevant.
