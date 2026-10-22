
---
name: task-structuring
description: Use when breaking down, structuring, or scoping development tasks, lab assignments, or complex user stories before implementation.
---

# Task Structuring Skill

## Overview

Decompose any high-level objective, feature request, technical assignment, or lab subject into clear, atomic, actionable, and testable tasks.

This skill establishes a consistent task-planning framework with explicit scope boundaries, dependencies, acceptance criteria, and a Definition of Done (DoD).

**Core Rule:** A task is not ready to start until its objectives, boundaries, prerequisites, expected results, and Definition of Done are clearly defined.

---

## When to Use

Use this skill when:
- Receiving an ambiguous or complex feature request.
- Planning a multi-step development project or refactoring operation.
- Breaking down laboratory assignments into manageable implementation steps.
- Organizing work into sequential, parallel, or independently testable tasks.
- Defining acceptance criteria before implementation begins.
- Preparing structured task specifications for AI coding agents or development teams.

Do NOT use for:
- One-line trivial fixes, such as correcting a typo or renaming a single variable.
- Generating Marp presentations (use `marp-lab-presentation` instead).
- Implementing the entire solution when the request only requires task planning.
- Creating unnecessary subtasks for a simple, clearly defined objective.

---

## Standard Task Structuring Framework (The 5-Step Process)

Whenever asked to structure a task, systematically apply this five-step framework.

### 1. Scope & Objective Framing

Define the task boundaries before planning implementation.

- **Goal:** One clear sentence describing the technical or business objective.
- **In-Scope:** Explicitly list the features, operations, and deliverables included.
- **Out-of-Scope:** Identify excluded functionality and actions that must not be performed.
- **Expected Deliverables:** Specify the files, components, documentation, or results to produce.
- **Constraints:** Identify relevant technical requirements, design rules, deadlines, and limitations.

### 2. Dependency & Prerequisite Mapping

Identify everything required before work can begin.

- List required tools, libraries, frameworks, configuration files, and environment settings.
- Identify existing components or tasks that must be completed first.
- Classify dependencies as **Sequential** or **Parallel**.
- Identify blockers, external requirements, and unresolved questions.
- Avoid inventing project structure or dependencies when source files are unavailable.

### 3. Atomic Breakdown

Decompose the objective into small, independently understandable subtasks.

Each subtask must follow the **INVEST** principle:

- **I — Independent:** Minimize unnecessary overlap with other tasks.
- **N — Negotiable:** Keep implementation details adaptable within the agreed scope.
- **V — Valuable:** Deliver a meaningful and verifiable result.
- **E — Estimable:** Define clear boundaries that allow effort estimation.
- **S — Small:** Make the task achievable in one focused work session whenever possible.
- **T — Testable:** Define an observable pass/fail outcome.

For every subtask, specify:
- A unique identifier.
- An action-oriented title.
- A concise description.
- Its prerequisites.
- Its estimated complexity: S, M, or L.
- Its expected deliverable.

### 4. Acceptance Criteria (Given - When - Then)

Define objective validation conditions for each subtask.

- **Given:** The initial state, context, or prerequisites.
- **When:** The action or event occurs.
- **Then:** The expected, observable result.

Acceptance criteria must be specific, measurable where appropriate, and verifiable.

Avoid vague statements such as "the feature works correctly" without explaining what successful behavior means.

### 5. Definition of Done (DoD)

Define the conditions required before considering the task complete.

- [ ] Implementation matches the agreed specifications.
- [ ] Scope boundaries have been respected.
- [ ] Relevant edge cases have been considered and handled.
- [ ] Manual or automated verification has been performed where appropriate.
- [ ] Verification results are supported by actual evidence.
- [ ] Relevant documentation has been updated.
- [ ] Required deliverables exist and contain no unresolved placeholders.
- [ ] Remaining limitations or incomplete work are explicitly documented.

Never mark a criterion as verified without supporting evidence.

---

## Output Template

When outputting a structured task, produce the following Markdown structure:

```markdown
# [Task Title]

## 1. Context & Objectives

- **Objective:** [One-sentence summary]
- **Scope:**
  - In-Scope: [Included features and deliverables]
  - Out-of-Scope: [Excluded features and actions]
- **Constraints:** [Technical requirements and limitations]
- **Expected Deliverables:** [Files or results to produce]

## 2. Prerequisites & Dependencies

- **Prerequisites:** [Tools, environment, libraries, and files required]
- **Blocked By:** [Preceding tasks or None]
- **Execution Strategy:** [Sequential, Parallel, or Mixed]
- **Open Questions:** [Unresolved requirements or None]

## 3. Sub-Task Breakdown

| ID | Sub-Task | Type | Prerequisites | Est. Complexity |
|:---|:---|:---:|:---|:---:|
| T1 | Configure the required environment | Setup | None | S |
| T2 | Implement the main functionality | Core | T1 | M |
| T3 | Verify the implementation | Verification | T2 | S |

## 4. Detailed Tasks & Acceptance Criteria

### T1: Configure the Required Environment

- **Description:** [What needs to be done]
- **Prerequisites:** [Required conditions]
- **Deliverable:** [Expected output]
- **Acceptance Criteria:**
  - Given [initial context],
    When [action is performed],
    Then [expected result is observable].

### T2: Implement the Main Functionality

- **Description:** [Implementation boundaries]
- **Prerequisites:** T1
- **Deliverable:** [Expected component or feature]
- **Acceptance Criteria:**
  - Given [required initial state],
    When [functionality is executed],
    Then [expected behavior occurs].

### T3: Verify the Implementation

- **Description:** [Tests and verification activities]
- **Prerequisites:** T2
- **Deliverable:** [Test results or verification report]
- **Acceptance Criteria:**
  - Given [the implementation is available],
    When [the required tests are executed],
    Then [results can be checked against expected outcomes].

## 5. Definition of Done (DoD)

- [ ] Implementation follows the agreed specifications.
- [ ] Acceptance criteria have been checked.
- [ ] Relevant edge cases have been addressed.
- [ ] Verification evidence has been recorded.
- [ ] Required deliverables have been produced.
- [ ] Documentation and known limitations have been addressed.
```

Adapt the number of subtasks to the actual complexity of the request. The template examples are illustrative and must be replaced with task-specific content.

---

## Common Mistakes & Anti-Patterns

| Anti-Pattern | Why It Fails | Correction |
|:---|:---|:---|
| Vague task names, such as "Do authentication" | Developers and agents cannot identify the expected boundaries | Use action verbs and explicit outcomes, such as "Implement JWT token validation middleware" |
| Monolithic tasks | Too many failure points and difficult incremental verification | Divide the work into atomic subtasks with independent validation points |
| Missing Out-of-Scope boundaries | Encourages scope creep and unrelated implementation | Explicitly identify excluded features and operations |
| Missing dependencies | Tasks may start before required components are ready | Map prerequisites and blockers before execution |
| Missing acceptance criteria | Completion becomes subjective and difficult to verify | Apply Given-When-Then criteria to every meaningful subtask |
| Unrealistic complexity estimates | Leads to poor planning and oversized tasks | Keep tasks bounded and revise estimates when new information appears |
| Invented project details | Can produce incorrect or incompatible plans | Inspect available files and clearly identify assumptions |
| Unverified completion claims | Makes incomplete work appear finished | Record actual test results and supporting evidence |
| Excessive decomposition | Adds unnecessary overhead to simple work | Match the number and size of subtasks to the real complexity |

---

## Red Flags & Validation Rules

Before delivering the structured task, verify that:

- The main objective is explicit and unambiguous.
- In-scope and out-of-scope items are distinguishable.
- Dependencies and blockers are identified.
- Every subtask has a unique ID and actionable title.
- Subtasks are sufficiently small and testable.
- Acceptance criteria describe observable outcomes.
- The Definition of Done contains verifiable conditions.
- Assumptions and missing information are clearly identified.
- The plan does not introduce unrequested features.
- Completion is never claimed without evidence.

If essential information is missing, ask focused clarification questions or provide a provisional plan that explicitly identifies its assumptions.

---

## Skill Testing Protocol

Test this skill independently with **Antigravity** and **GitHub Copilot in VS Code**.

Use the same task descriptions in both environments to compare the generated results.

### Test 1: Complex Feature Request

Provide a multi-step feature request with several components and dependencies.

**Expected Result:** The task is divided into logical subtasks with clear scope, dependencies, acceptance criteria, and a Definition of Done.

### Test 2: Laboratory Assignment

Provide a technical lab assignment requiring environment configuration, implementation, and verification.

**Expected Result:** The plan separates setup, implementation, and testing tasks while identifying the necessary deliverables.

### Test 3: Ambiguous Request

Provide a request with missing requirements or unclear boundaries.

**Expected Result:** The skill identifies unresolved questions and states assumptions rather than inventing requirements.

### Test 4: Simple Task

Provide a trivial request, such as correcting a typo in one file.

**Expected Result:** The skill avoids unnecessary decomposition and recommends a proportionate approach.

### Evaluation Matrix

| Criterion | Expected Result |
|:---|:---|
| Scope Definition | Clear objectives and boundaries |
| Dependency Mapping | Prerequisites and blockers identified |
| Task Decomposition | Small, actionable subtasks |
| Acceptance Criteria | Observable Given-When-Then conditions |
| Definition of Done | Verifiable completion checklist |
| Proportionality | Task detail matches task complexity |
| Technical Accuracy | No unsupported project assumptions |
| Reusability | Applicable to different development tasks |

Record the actual outcome of each test in both environments. Mark a test as passed only after inspecting the generated task plan against the relevant criteria.

---

## Final Deliverable

Produce a structured, actionable, and testable task specification that can be used by a developer or AI coding agent before implementation begins.

The final plan must define the objective, scope, dependencies, subtasks, acceptance criteria, and Definition of Done without introducing unnecessary complexity or unsupported assumptions.
