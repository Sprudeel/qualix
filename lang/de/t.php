<?php
return array(
	"errors" => array(
		"form_data_restored_please_submit_again" => "Deine eingegebenen Daten wurden wiederhergestellt. Speichern nicht vergessen!",
		"session_expired_try_again" => "Ups, du bist inzwischen nicht mehr eingeloggt. Bitte logge dich nochmals ein, deine Eingaben werden dann wiederhergestellt.",
	),
	"footer" => array(
		"slogan" => "Qualix. was gaffsch?",
		"contact_text" => "Kontaktiere das Qualix-Team"
	),
	"global" => array(
		"add" => "Hinzufügen",
		"add_observation" => "Beobachtung erfassen",
		"autosaved" => "Automatisch gespeichert",
		"autosaving" => "Speichern...",
		"autosave_paused" => "Warte bis fertig getippt...",
		"close" => "Schliessen",
		"datepicker" => array(
			"calendar" => "Kalender",
			"current_month" => "Aktueller Monat",
			"nav" => "Kalendernavigation",
			"next_month" => "Nächster Monat",
			"next_year" => "Nächstes Jahr",
			"no_date_selected" => "Kein Datum ausgewählt",
			"previous_month" => "Vorheriger Monat",
			"previous_year" => "Vorheriges Jahr",
			"selected_date" => "Ausgewähltes Datum",
			"today" => "Heute",
		),
		"date_format" => "%A %d.%m.%Y",
		"delete" => "Löschen",
		"edit" => "Bearbeiten",
		"editor" => array(
			"heading_large" => "Titel L",
			"heading_normal" => "Titel M",
			"heading_small" => "Titel S"
		),
		"negative" => "Negativ",
		"neutral" => "Neutral",
		"no" => "Nein",
		"no_options" => "Keine Einträge gefunden",
		"no_result" => "Keine Resultate gefunden",
		"or" => "oder",
		"page_title" => "Qualix",
		"positive" => "Positiv",
		"print" => "Drucken",
		"really_delete" => "Wirklich löschen?",
		"save" => "Speichern",
		"total" => "Total",
		"yes" => "Ja",
	),
	"header" => array(
		"archived" => "Archiviert",
		"course_admin" => "Kursadmin",
		"language_switch" => "Sprache wechseln. Übersetzungen via Phrase.com",
		"qualix" => "Qualix",
		"welcome" => "Willkommen, :user",
	),
	"mails" => array(
		"invitation" => array(
			"accept" => "Klicke :here um die Einladung anzunehmen.",
			"greeting" => "Liebe Grüsse, dein Qualix-Team",
			"here" => "hier",
			"subject" => "Qualix: Einladung in \":courseName\"",
			"you_have_been_invited" => ":inviterName hat dich auf Qualix in den Kurs \":courseName\" eingeladen.",
		),
	),
	"models" => array(
		"block" => array(
			"block_date" => "Datum",
			"full_block_number" => "Blocknummer",
			"name" => "Blockname",
			"num_observations" => "Anzahl Beobachtungen",
			"requirements" => "Anforderungen",
		),
		"category" => array(
			"name" => "Titel",
			"num_observations" => "Anzahl Beobachtungen",
		),
		"course" => array(
			"course_number" => "Kursnummer",
			"name" => "Kursname",
			"observation_count_red_threshold" => "Mindestanzahl Beobachtungen",
			"observation_count_green_threshold" => "Gewünschte Anzahl Beobachtungen",
			"uses_impressions" => "Eindruck auf Beobachtungen aktivieren",
		),
		"feedback_requirement" => array(
			"status" => "Status",
			"comment" => "Notizen"
		),
		"invitation" => array(
			"email" => "E-Mail",
		),
		"invitation_claim" => array(
			"token" => "Token",
		),
		"observation" => array(
			"block" => "Block",
			"categories" => "Kategorien",
			"content" => "Beobachtung",
			"impression" => "Eindruck",
			"one" => "Beobachtung",
			"participant" => "TN",
			"participants" => "TN",
			"requirements" => "Anforderungen",
			"user" => "Beobachtet von",
		),
		"observation_assignment" => array(
			"blocks" => "Blöcke",
			"name" => "Beobachtungsauftrag",
			"participants" => "TN",
			"users" => "Equipe",
		),
		"participant" => array(
			"group" => "Abteilung",
			"image" => "Bild",
			"scout_name" => "Pfadiname",
			"freetext" => "Freitext"
		),
		"participant_group" => array(
			"group_name" => "Gruppe",
			"participants" => "TN",
		),
		"feedback" => array(
			"display_name" => ":feedback_name :participant_name",
			"name" => "Titel",
			"participant" => "TN",
			"participants" => "TN",
			"feedback_contents_template" => "Vorlage für Rückmeldungs-Text",
			"feedback_contents" => "Rückmeldungs-Text",
			"requirement_progress" => "Anforderungen",
			"requirements" => "Relevante Anforderungen",
			"trainer_assignment" => "Zuständig für :participant",
			"users" => "Zuständig",
		),
		"requirement" => array(
			"blocks" => "Blöcke",
			"content" => "Anforderung",
			"mandatory" => "Mindestanforderung",
			"num_observations" => "Anzahl Beobachtungen",
			"one" => "Anforderung",
		),
		"requirement_status" => array(
			"color" => "Farbe",
			"icon" => "Icon",
			"name" => "Name",
			"defaults" => array(
				"undecided" => "unter Beobachtung",
				"passed" => "erfüllt",
				"not_passed" => "nicht erfüllt",
			),
		),
		"user" => array(
			"email" => "E-Mail",
			"group" => "Abteilung",
			"image" => "Bild",
			"name" => "Name",
			"password" => "Passwort",
			"password_confirmation" => "Passwort bestätigen",
		),
	),
	"views" => array(
		"admin" => array(
			"blocks" => array(
				"are_blocks_required" => array(
					"answer" => "Ja, jede Beobachtung gehört zu genau einem Block. Daher kannst du Qualix nur verwenden, wenn du Blöcke im Kurs erfasst hast. Falls du Beobachtungen ausserhalb der Blöcke machen willst, empfehlen wir, einen oder mehrere \"Sonstiges\"-Blöcke zu erfassen.",
					"question" => "Muss ich Blöcke für meinen Kurs erfassen?",
				),
				"create_success" => "Block \":name\" wurde erfolgreich erstellt.",
				"delete_success" => "Block \":name\" wurde erfolgreich gelöscht.",
				"edit" => "Block bearbeiten",
				"edit_success" => "Block \":name\" wurde erfolgreich gespeichert.",
				"existing" => "Blöcke :courseName",
				"import" => "Blöcke importieren...",
				"menu_name" => "Blöcke",
				"new" => "Neuer Block",
				"no_blocks" => "Bisher sind keine Blöcke erfasst.",
				"observations_on_block" => "{0}Es ist keine Beobachtung damit verbunden.|{1}Damit verbunden ist eine Beobachtung, die mitgelöscht wird.|[2,*]Damit verbunden sind :count Beobachtungen, die mitgelöscht werden.",
				"really_delete" => "Willst du den Block \":name\" wirklich löschen?",
				"what_are_blocks" => array(
					"answer" => "Blöcke sind zeitliche Abschnitte im Grobprogramm. Man könnte sie auch Lektionen oder Programmeinheiten nennen. Du kannst zudem erfassen, welche Anforderungen in einem Block wohl am ehesten beobachtet werden können (z.B. eine Anforderung zu Sicherheitsüberlegungen in einem Block über Sicherheitskonzepte). Beim Erfassen von Beobachtungen kann das aber immer noch übersteuert werden.",
					"question" => "Was sind Blöcke?",
				),
			),
			"block_import" => array(
				"ecamp2" => array(
					"block_overview" => "Blockübersicht",
					"how_to_get_the_block_overview" => array(
						"answer" => "Wenn du die Blöcke in deinem Kurs auf :ecamp2 erfasst hast, gehe dort links in der Navigation zu \"Kurs Ziele\". Danach kannst du die Blockübersicht oben rechts als Excel-Datei herunterladen.",
						"question" => "Woher bekomme ich die Blockübersicht?",
					),
					"name" => "eCamp v2",
				),
				"error_while_parsing" => "Die Blockübersicht konnte nicht korrekt gelesen werden - hast du die Datei unverändert hochgeladen?",
				"error_unsupported_format" => "Das Dateiformat der Blockübersicht ist nicht unterstützt.",
				"import" => "Importieren",
				"import_from" => "Blöcke aus :source importieren",
				"import_success" => "{0}In der importierten Datei wurden keine Blöcke gefunden.|{1}In der importierten Datei wurde ein Block gefunden.|[2,*]In der importierten Datei wurden :count Blöcke gefunden.",
				"unknown_error" => "Beim Import ist ein Fehler aufgetreten. Versuche es nochmals, oder erfasse deine Blöcke manuell.",
				"warning_existing_blocks" => "In deinem Kurs sind bereits Blöcke definiert. Wenn beim Import eine Blocknummer schon existiert, wird der bestehende Block durch den Import aktualisiert.",
			),
			"categories" => array(
				"are_categories_required" => array(
					"answer" => "Nein, Kategorien sind komplett optional, falls ihr in eurem Kursteam keine Verwendung dafür habt.",
					"question" => "Muss ich Kategorien für meinen Kurs erfassen?",
				),
				"create_success" => "Kategorie \":name\" wurde erfolgreich erstellt.",
				"delete_success" => "Kategorie \":name\" wurde erfolgreich gelöscht.",
				"edit" => "Kategorie bearbeiten",
				"edit_success" => "Kategorie \":name\" wurde erfolgreich gespeichert.",
				"existing" => "Kategorien :courseName",
				"menu_name" => "Kategorien",
				"new" => "Neue Kategorie",
				"no_categories" => "Bisher sind keine Kategorien erfasst.",
				"observations_on_category" => "{0}Es ist keine Beobachtung damit verbunden.|{1}Damit verbunden ist eine Beobachtung, diese wird aber nicht gelöscht.|[2,*]Damit verbunden sind :count Beobachtungen, diese werden aber nicht gelöscht.",
				"really_delete" => "Willst du die Kategorie \":name\" wirklich löschen?",
				"what_are_categories" => array(
					"answer" => "Kategorien können auf verschiedene Art eingesetzt werden. Jeder Beobachtung kann eine, mehrere oder keine Kategorie zugewiesen werden. Das kann man zum Beispiel zur Einordnung in verschiedene Abschnitte eines Rückmelde-Formulars verwenden. Oder um zu markieren, ob eine Beobachtung schon im Zwischenquali angesprochen wurde. Oder noch ganz andere Anwendungen, die dir einfallen. Danach kannst du die Beobachtungs-Liste eines Teilnehmenden nach Kategorien filtern.",
					"question" => "Was sind Kategorien?",
				),
			),
			"course_settings" => array(
				"archive" => "Kurs archivieren…",
				"archive_confirm" => "Definitiv archivieren",
				"archive_description" => "Dies wird alle TN, Beobachtungen und Rückmeldungen im Kurs komplett und dauerhaft löschen. Diese Aktion kann nicht rückgängig gemacht werden. Blöcke, Anforderungen, Kategorien und Equipenmitglieder bleiben zur späteren Einsicht bestehen.",
				"archive_or_delete" => "Kurs archivieren oder löschen",
				"archive_success" => "Kurs \":name\" wurde archiviert.",
				"archive_vs_delete" => array(
					"answer" => "Wenn du einen Kurs archivierst, werden alle personenbezogenen Daten (TN, Bilder, Beobachtungen, Rückmeldungen) dauerhaft gelöscht. So kannst du Datenschutz-Problemen entgegenwirken, aber für spätere Kurse trotzdem noch deine alten Anforderungen und Blöcke einsehen. Wenn du den Kurs hingegen ganz löschst wird alles was damit zu tun hat unwiderruflich entfernt.",
					"question" => "Was ist der Unterschied?",
				),
				"delete" => "Kurs komplett löschen…",
				"delete_confirm" => "Definitiv löschen",
				"delete_description" => "Dies wird den Kurs komplett und dauerhaft löschen, inklusive alle Blöcke, TN, Anforderungen, Kategorien, Rückmeldungen und Beobachtungen darin. Diese Aktion kann nicht rückgängig gemacht werden.",
				"delete_success" => "Kurs \":name\" und alle damit verbundenen Daten wurden gelöscht.",
				"edit" => "Kurseinstellungen :name",
				"edit_success" => "Kursdetails erfolgreich gespeichert.",
				"is_archived" => ":name ist archiviert, das heisst alle personenbezogenen Daten der Teilnehmenden wurden gelöscht.",
				"menu_name" => "Kurseinstellungen",
				"per_equipe_and_tn" => "pro Equipenmitglied und TN",
				"really_archive" => "Kurs \":name\" wirklich archivieren?",
				"really_delete" => "Kurs \":name\" wirklich löschen?",
				"thresholds" => array(
					"question" => "Wozu dienen diese Mindestanzahlen?",
					"answer" => "Zur roten bzw. grünen Einfärbung der Anzahl Beobachtungen auf der Übersicht sowie auf der TN-Detailansicht.",
				),
			),
			"equipe" => array(
				"cannot_delete_last_leiter" => "Mindestens ein Equipenmitglied muss im Kurs bleiben.",
				"delete_invitation_success" => "Die Einladung für :email wurde erfolgreich gelöscht.",
				"delete_success" => ":name wurde aus der Equipe entfernt.",
				"existing" => "Equipe :courseName",
				"existing_invitations" => "Einladungen",
				"invitation_email_sent" => "Wir haben eine Einladung an :email gesendet.",
				"invite" => "Einladen",
				"menu_name" => "Equipe",
				"new_invitation" => "Equipenmitglied einladen",
				"no_invitations" => "Momentan sind keine Einladungen offen.",
				"really_delete" => "Willst du :name wirklich aus der Kursequipe entfernen?",
				"really_delete_invitation" => "Willst du die Einladung für :email wirklich entfernen?",
			),
			"new_course" => array(
				"more_settings" => "Weitere Einstellungen",
				"create" => "Kurs eröffnen",
				"create_success" => "Kurs \":name\" wurde erfolgreich erstellt.",
				"menu_name" => "Neuen Kurs erstellen",
				"title" => "Neuen Kurs erstellen",
			),
			"observation_assignments" => array(
				"are_observation_assignments_required" => array(
					"answer" => "Nein, aber sie sind ein nützliches Tool beim RQF (Rückmelde-, Qualifizierungs-, Förderungs-) Prozess.",
					"question" => "Muss ich Beobachtungsaufträge für meinen Kurs erfassen?",
				),
				"create_success" => "Beobachtungsauftrag wurde erfolgreich erstellt.",
				"delete_success" => "Beobachtungsauftrag wurde erfolgreich gelöscht.",
				"edit" => "Beobachtungsauftrag bearbeiten",
				"edit_success" => "Beobachtungsauftrag wurde erfolgreich geändert.",
				"existing" => "Beobachtungsaufträge :courseName",
				"menu_name" => "Beobachtungsaufträge",
				"new" => "Neuer Beobachtungsauftrag",
				"no_observation_assignment" => "Bisher sind keine Beobachtungsaufträge erfasst.",
				"really_delete" => "Willst du den Beobachtungsauftrag \":name\" wirklich löschen?",
				"what_are_observation_assignments" => array(
					"answer" => "Viele Equipen definieren, wer wann wen beobachten sollte. Diese Aufträge könnt ihr hier definieren und seht diese (und ob sie schon erfüllt sind) z.Bsp. beim Spick.",
					"question" => "Was sind Beobachtungsaufträge?",
				),
			),
			"participants" => array(
				"add_success" => "TN \":name\" erfolgreich erfasst.",
				"edit" => "TN ändern",
				"edit_success" => "TN \":name\" erfolgreich gespeichert.",
				"existing" => "Teilnehmende :courseName",
				"import" => "TN importieren...",
				"menu_name" => "TN",
				"new" => "Neue Teilnehmende",
				"no_participants" => "Bisher sind keine Teilnehmende erfasst.",
				"observations_on_participant" => "{0}Es ist keine Beobachtung damit verbunden.|{1}Damit verbunden ist eine Beobachtung, die mitgelöscht wird.|[2,*]Damit verbunden sind :count Beobachtungen, die mitgelöscht werden.",
				"really_remove" => "Willst du :scout_name wirklich aus deinem Kurs entfernen?",
				"remove_success" => "TN \":name\" erfolgreich aus dem Kurs entfernt.",
			),
			"participant_import" => array(
				"MiData" => array(
					"participant_list" => "TN-Liste",
					"how_to_get_the_participant_list" => array(
						"answer" => "Wenn die Teilnehmenden in deinem Kurs auf :MiData erfasst sind, gehe dort auf deinen Kurs und in der Navigation zu \"Teilnehmende\". Danach kannst du oben rechts die Liste der Teilnehmenden als Excel-Datei herunterladen. Andernfalls kannst du die Liste auch manuell erstellen mit den Spaltenbezeichnungen: \"Pfadiname\" und \"Hauptebene\"",
						"question" => "Woher bekomme ich die TN-Liste?",
					),
					"name" => "MiData",
					"column_names" => array(
						"scout_name" => "Pfadiname",
						"first_name" => "Vorname",
						"last_name" => "Nachname",
						"group" => "Hauptebene",
					),
				),
				"error_while_parsing" => "Die TN-Liste konnte nicht korrekt gelesen werden - hat deine Datei mindestens eine Spalte mit der Überschrift \":scout_name\", \":first_name\" oder \":last_name\"?",
				"error_unsupported_format" => "Das Dateiformat der TN-Liste ist nicht unterstützt.",
				"import" => "Importieren",
				"import_from" => "Teilnehmende aus :source importieren",
				"import_success" => "{0}In der importierten Datei wurden keine Teilnehmende gefunden.|{1}In der importierten Datei wurde ein*e TN gefunden.|[2,*]In der importierten Datei wurden :count Teilnehmende gefunden.",
				"unknown_error" => "Beim Import ist ein Fehler aufgetreten. Versuche es nochmals, oder erfasse deine Teilnehmenden manuell.",
				"warning_existing_participants" => "In deinem Kurs sind bereits Teilnehmende erfasst. Diese bleiben bestehen und durch den Import werden neue zusätzliche erfasst.",
			),
			"participant_groups" => array(
				"are_participant_groups_required" => array(
					"answer" => "Nein, musst du natürlich nicht. Sie sind nur dazu da, den Aufwand zu verringern .",
					"question" => "Muss ich TN-Gruppen für meinen Kurs erfassen?",
				),
				"create_success" => "TN-Gruppe wurde erfolgreich erstellt.",
				"delete_success" => "TN-Gruppe wurde erfolgreich gelöscht.",
				"edit" => "TN-Gruppe bearbeiten",
				"edit_success" => "TN-Gruppe wurde erfolgreich gespeichert.",
				"existing" => "TN-Gruppen :courseName",
				"menu_name" => "TN-Gruppen",
				"new" => "Neue TN-Gruppe",
				"no_participant_group" => "Bisher sind keine TN-Gruppen erfasst.",
				"really_delete" => "Willst du die TN-Gruppe \":group_name\" wirklich löschen?",
				"what_are_participant_groups" => array(
					"answer" => "Teilnehmende können zu Gruppen hinzugefügt werden. Diese Gruppen stehen dann zur Schnellwahl bei Beobachtungen zu Verfügung.",
					"question" => "Was sind TN-Gruppen?",
				),
			),
			"feedbacks" => array(
				"create" => "Erstellen",
				"go_back_to_feedback_list" => "Abbrechen",
				"create_success" => "Die Rückmeldung \":name\" wurde erfolgreich erstellt.",
				"delete_success" => "Die Rückmeldung \":name\" wurde erfolgreich gelöscht.",
				"edit" => "Rückmeldung bearbeiten",
				"edit_success" => "Die Rückmeldung \":name\" wurde erfolgreich gespeichert.",
				"error_requirements_dont_match" => "Die Anforderungen in der Vorlage stimmten nicht mit den relevanten Anforderungen überein. Wir haben das automatisch korrigiert. Kontrolliere ob jetzt alles stimmt und speichere erneut.",
				"existing" => "Rückmeldungen :courseName",
				"trainer_assignment" => "Zuordnung der TN zu den Equipenmitgliedern",
				"menu_name" => "Rückmeldungen (ehem. Qualis)",
				"new" => "Neue Rückmeldung",
				"no_feedbacks" => "Bisher sind keine Rückmeldungen erfasst.",
				"select_all_participants" => "Alle auswählen",
				"select_all_requirements" => "Alle auswählen",
				"feedback_contents_template_description" => array(
					"answer" => "Der Rückmeldungs-Text wird bei allen TN vorausgefüllt mit dem Text den du hier eingibst. So kannst du zum Beispiel vorgeben, welche Abschnitte jede Rückmeldung haben sollte. Aber Achtung: Nachdem die Rückmeldung erstellt ist kannst du den Rückmeldungs-Text nur noch ändern indem du ihn bei allen TN einzeln von Hand bearbeitest!",
					"question" => "Wofür ist dieses Feld?",
				),
				"really_delete" => "Willst du die Rückmeldung \":name\" wirklich löschen? Alle Informationen über erfüllte Anforderungen werden dabei mitgelöscht. Die Beobachtungen die damit verbunden waren bleiben aber erhalten.",
				"what_are_feedbacks" => array(
					"answer" => "Eine Rückmeldung steht für ein TN-Gespräch, Zwischengespräch das mit allen Teilnehmenden separat gehalten wird, oder für eine Qualifikation die alle Teilnehmenden separat bestehen können. Auf der Detailansicht der ausgewählten TN kannst du später einen Rückmeldungs-Text zusammenstellen um dein Gespräch zu planen oder zu protokollieren. Eine Rückmeldung kann sich auf alle Anforderungen des Kurses oder auch nur auf einen Teil davon beziehen.",
					"question" => "Was sind Rückmeldungen?",
				),
			),
			"requirements" => array(
				"are_requirements_required" => array(
					"answer" => "Es ist sehr wichtig, vor dem Kurs im Kursteam Anforderungen festzulegen, damit alle Teilnehmenden nach dem gleichen Schema qualifiziert werden und damit Entscheide im Kurs einfacher gefällt werden können. Aber wenn du diese nicht in Qualix führen willst, kannst du Beobachtungen auch ohne Anforderungen erfassen.",
					"question" => "Muss ich Anforderungen für meinen Kurs erfassen?",
				),
				"create_success" => "Anforderung wurde erfolgreich erstellt.",
				"delete_success" => "Anforderung wurde erfolgreich gelöscht.",
				"edit" => "Anforderung bearbeiten",
				"edit_success" => "Anforderung wurde erfolgreich gespeichert.",
				"existing" => "Anforderungen :courseName",
				"manage_statuses" => "Stati verwalten...",
				"menu_name" => "Anforderungen",
				"new" => "Neue Anforderung",
				"no_requirements" => "Bisher sind keine Anforderungen erfasst.",
				"observations_on_requirement" => "{0}Es ist keine Beobachtung damit verbunden.|{1}Damit verbunden ist eine Beobachtung, diese wird aber nicht gelöscht.|[2,*]Damit verbunden sind :count Beobachtungen, diese werden aber nicht gelöscht.",
				"feedbacks_using_requirement" => "{0}Die Anforderung ist in keiner Rückmeldung eingesetzt.|{1}Die Anforderung wird aus einer Rückmeldung entfernt.|[2,*]Die Anforderung wird aus :count Rückmeldungen entfernt.",
				"really_delete" => "Willst du diese Anforderung wirklich löschen?",
				"what_are_requirements" => array(
					"answer" => "Anforderungen sind klare Voraussetzungen und Kriterien, die alle Teilnehmenden während dem Kurs erfüllen sollen. Anhand der Anforderungen wird beurteilt, wer den Kurs besteht und wer nicht. Du kannst Anforderungen als Mindestanforderungen markieren wenn du willst, aber es hat momentan keine Auswirkungen in Qualix selber (bis auf eine etwas andere Farbgebung).",
					"question" => "Was sind Anforderungen?",
				),
			),
			"requirement_statuses" => array(
				"cannot_delete_the_last_requirement_status" => "Der letzte verbleibende Status im Kurs kann nicht gelöscht werden.",
				"create_success" => "Status wurde erfolgreich erstellt.",
				"delete_success" => "Status wurde erfolgreich gelöscht.",
				"edit" => "Status bearbeiten",
				"edit_success" => "Status wurde erfolgreich gespeichert.",
				"existing" => "Anforderungs-Stati :courseName",
				"new" => "Neuer Status",
				"no_color_results" => "Keine Resultate gefunden. Probiers mal mit einem englischen Farbnamen wie \"red\".",
				"no_icon_results" => "Keine Resultate gefunden. Probiers mit englischen Begriffen wie \"eye\".",
				"num_uses" => "Anzahl Verwendungen",
				"feedback_requirements_using_requirement_status" => "{0}Dieser Status wird in keiner Rückmeldung verwendet.|{1}Dieser Status wird noch in einer Rückmeldung verwendet. Er kann daher nicht gelöscht werden.|[2,*]Dieser Status wird noch :count Mal in Rückmeldungen verwendet. Er kann daher nicht gelöscht werden.",
				"really_delete" => "Willst du diesen Status wirklich löschen?",
				"status" => "Status",
				"what_are_requirement_statuses" => array(
					"answer" => "In den sogenannten \"Rückmeldungen\" kannst du in Qualix für alle Teilnehmenden festhalten, ob sie die Mindestanforderungen erfüllt oder (noch) nicht erfüllt haben. \"Erfüllt\" und \"nicht erfüllt\" sind Beispiele für Stati. Für fortgeschrittene Anwendungen kann es Sinn machen, weitere Stati zu erfassen, zum Beispiel \"Gespräch ausstehend\".",
					"question" => "Wofür wird das verwendet?",
				),
			),
		),
		"crib" => array(
			"here" => "hier",
			"mandatory_requirements" => "Mindestanforderungen",
			"menu_name" => "Blöcke",
			"non_mandatory_requirements" => "Weitere Anforderungen",
			"no_blocks" => "Bisher sind keine Blöcke erfasst. Bitte erfasse und verbinde sie :here mit Anforderungen.",
			"see_only_empty_blocks" => array(
				"answer" => "Dann sind bisher keine Blöcke mit Anforderungen verbunden. Bitte verbinde die Blöcke :here mit Anforderungen.",
				"question" => "Siehst du nur leere Blöcke ohne Anforderungen?",
			),
			"title" => "Was kann ich heute beobachten?",
			"view_as" => "Aus Sicht von",
		),
		"error_form" => array(
			"back" => "Zurück zu wo ich gerade noch war...",
			"back_without_sending_report" => "Zurück ohne eine Beschreibung zu senden",
			"error_report_has_been_submitted" => "Deine Beschreibung wurde abgesendet. Vielen Dank!",
			"it_looks_like_we_are_having_issues" => "Es sieht so aus als hätten wir ein Problem.",
			"our_team_has_been_notified" => "Das Qualix-Team wurde bereits informiert. Wenn du uns helfen möchtest, teile uns bitte unten mit, was geschehen ist.",
			"please_try_again_later" => "Bitte versuche es später nochmals.",
			"send_description" => "Beschreibung absenden",
			"thank_you" => "Danke",
			"what_happened" => "Was ist passiert?",
			"what_happened_example" => "Ich habe auf das \"X\" und dann auf \"Bestätigen\" geklickt.",
		),
		"feedback" => array(
			"print" => array(
				"pdf_downloaded" => "PDF wurde heruntergeladen",
				"pdf_is_being_generated" => "PDF wird generiert...",
				"error_creating_pdf" => "Beim Erstellen des PDFs ist ein Fehler aufgetreten. Lade die Seite neu und versuche es nochmals, oder kontaktiere das Qualix-Team (siehe zuunterst auf der Seite).",
				"error_fetching_data" => "Beim Laden der Rückmeldung ist ein Fehler aufgetreten. Lade die Seite neu und versuche es nochmals, oder kontaktiere das Qualix-Team (siehe zuunterst auf der Seite).",
			),
			"requirements_matrix" => array(
				"edit_feedback" => "Rückmeldungstext bearbeiten",
				"logged_out_help" => array(
					"answer" => "Du bist inzwischen nicht mehr eingeloggt.",
					"click_here_to_log_back_in" => "Klicke hier um dich wieder einzuloggen und weiterzuarbeiten.",
					"question" => "Nicht mehr eingeloggt!",
				),
				"offline_help" => array(
					"answer" => "Aktuell ist keine Verbindung zum Qualix-Server möglich. Überprüfe ob du noch Internetverbindung hast, und probiere es dann nochmals.",
					"question" => "Keine Internetverbindung!",
				),
				"title" => "Anforderungs-Matrix :name",
			)
		),
		"feedbacks" => array(
			"edit_responsibles" => "Zuordnung der TN zu den Equipenmitgliedern ändern",
			"go_to_progress_overview" => "Anforderungs-Matrix",
			"menu_name" => "Rückmeldungen",
			"none_assigned_to_user" => ":user ist für keine TN verantwortlich. Du kannst oben die Perspektive wechseln, oder die",
			"show_all" => "Alle TN anzeigen",
			"title" => "Rückmeldungen",
			"view_as" => "Aus Sicht von",
		),
		"invitation" => array(
			"accept_invitation" => "Ja, Einladung annehmen",
			"accept_success" => "Einladung angenommen. Du bist jetzt in der Kursequipe von \":courseName\".",
			"already_in_equipe" => "Du bist schon in der Equipe von :courseName. Du kannst diese Einladung nicht annehmen.",
			"decline_invitation" => "Nein, diese Einladung ist nicht für mich",
			"error" => "Einladung konnte nicht angenommen werden.",
			"is_email_yours" => "Gehört dir die Mailadresse :email?",
			"title" => "Einladung in :courseName",
		),
		"login" => array(
			"midata" => array(
				"error_please_retry" => "Etwas hat nicht geklappt. Versuche es noch einmal.",
				"error_retry_later" => "Leider klappt es momentan gerade nicht. Versuche es später wieder, oder registriere dich mit einem klassischen Account.",
				"user_has_denied_access" => "Zugriff in MiData verweigert.",
				"use_normal_credentials" => "Melde dich bitte wie üblich mit Benutzernamen und Passwort an.",
			),
			"via_midata" => "Via PBS MiData einloggen",
		),
		"observations" => array(
			"add_success" => "Beobachtung erfasst. Mässi!",
			"go_to_participant" => "Zu :name",
			"edit" => "Beobachtung bearbeiten",
			"edit_success" => "Beobachtung aktualisiert.",
			"new" => "Beobachtung erfassen",
			"char_limit" => "Zeichen genutzt:",

		),
		"overview" => array(
			"here" => "hier",
			"menu_name" => "Überblick",
			"no_participants" => "Bisher sind keine Teilnehmende erfasst. Bitte erfasse sie :here.",
			"no_feedback" => "keine",
			"title" => "Beobachtungs-Überblick",
			"show_feedbacks" => "Rückmeldung anzeigen:",
		),
		"participants" => array(
			"here" => "hier",
			"menu_name" => "TN",
			"no_participants" => "Bisher sind keine Teilnehmende erfasst. Bitte erfasse sie :here.",
			"title" => "Beobachtung für TN erfassen",
		),
		"participant_details" => array(
			"delete_observation_success" => "Beobachtung gelöscht.",
			"existing_observations" => "Beobachtungen",
			"filter" => "Beobachtungen filtern",
			"filter_by_category" => "Kategorie",
			"filter_by_requirement" => "Anforderung",
			"hide_already_used_observations" => "Beobachtungen ausblenden, wenn sie in dieser Rückmeldung schon erwähnt wurden",
			"no_observations" => "Keine Beobachtungen gefunden.",
			"num_observations" => "{0}Bisher keine Beobachtungen.|{1}Erst eine Beobachtung. Da geht noch mehr!|[2,*]:count Beobachtungen, davon :positive mit positivem, :neutral mit neutralem und :negative mit negativem Eindruck.",
			"observations_without_category" => "Beobachtungen ohne Kategorie",
			"observations_without_requirement" => "Beobachtungen ohne Anforderung",
			"feedbacks" => array(
				"title" => "Rückmeldungen",
			),
			"feedbacks_using_observation" => "{0}|{1} Folgende Rückmeldung verwendet diese Beobachtung: :feedbacks|[2,*] Die folgenden :count Rückmeldungen verwenden diese Beobachtung: :feedbacks",
			"really_delete_observation" => "Willst du diese Beobachtung wirklich löschen?",
			"title" => "TN Details",
		),
		"feedback_content" => array(
			"back_to_participant" => "Zurück zu :name",
			"back_to_feedback_overview" => "Zurück zur Rückmeldungs-Übersicht",
			"comments_are_internal_and_will_not_be_printed" => "Interne Notizen von der Anforderungs-Matrix, werden nicht gedruckt.",
			"error_observation_not_found" => "Eine der eingefügten Beobachtungen wurde nicht gefunden. Vielleicht wurde sie inzwischen gelöscht. Kontrolliere ob alles stimmt und speichere dann erneut.",
			"error_requirements_changed" => "Die Änderungen konnten nicht gespeichert werden, weil die Anforderungen in der Rückmeldung inzwischen geändert wurden. Kontrolliere ob alles stimmt und speichere dann erneut.",
			"error_requirement_not_found" => "Eine der eingefügten Anforderungen wurde nicht gefunden. Vielleicht wurde sie inzwischen gelöscht. Kontrolliere ob alles stimmt und speichere dann erneut.",
			"logged_out_help" => array(
				"answer" => "Du bist inzwischen nicht mehr eingeloggt.",
				"click_here_to_log_back_in" => "Klicke hier um dich wieder einzuloggen und weiterzuarbeiten.",
				"question" => "Nicht mehr eingeloggt!",
			),
			"observed_by" => "Beobachtet von :name",
			"offline_help" => array(
				"answer" => "Aktuell ist keine Verbindung zum Qualix-Server möglich. Behalte diese Seite offen. Du kannst normal weiterarbeiten, und wenn du wieder online bist werden deine Änderungen gespeichert.",
				"question" => "Keine Internetverbindung!",
			),
			"participant_feedback" => ":feedback: :participant",
			"requirements_status" => "Anforderungen",
			"select_observation" => "Beobachtung wählen",
			"text_element" => "Text",
			"text_placeholder" => "Hier tippen...",
			"title" => "Rückmeldung Details",
		),
		"register" => array(
			"via_midata" => "Via PBS MiData registrieren",
		),
		"user_settings" => array(
			"edit" => "Mein Profil bearbeiten",
			"edit_success" => "Die persönlichen Details wurden erfolgreich gespeichert.",
		),
		"welcome" => array(
			"no_courses" => "Du bist momentan noch in keinem Kurs eingetragen. Lass dich in einen Kurs einladen oder erstelle selber einen neuen.",
			"text" => "Qualix soll gegen den Papier-Krieg helfen und euch dabei unterstützen, den Überblick über alle Beobachtungen und Rückmeldungen zu behalten. Viel Spass beim Beobachten!",
			"title" => "Willkommä bim Qualix",
			"here" => "hier",
			"changelog" => "Die neusten Änderungen vom Qualix findest du :here.",
		),
		"page_titles" => array(
			"create_new_course" => "Qualix - neuen Kurs erstellen",
			"crib_overview" => "Qualix - Blockübersicht",
			"participants_overview" => "Qualix - TN Übersicht",
			"overview" => "Qualix - Beobachtungsüberblick",
			"participant_detail" => "Qualix - :participantName's Details",
			"edit_participant" => "Qualix - TN bearbeiten",
			"create_observation" => "Qualix - Beobachtung erstellen",
			"edit_observation" => "Qualix - Beobachtung bearbeiten",
			"edit_course" => "Qualix - Admin - Kurseinstellungen",
			"equipe" => "Qualix - Admin  - Equipe",
			"admin_crib_overview" => "Qualix - Admin - Blockübersicht",
			"admin_participants" => "Qualix - Admin - TN Übersicht",
			"admin_participants_overview" => "Qualix - Admin - TN Übersicht",
			"admin_requirements" => "Qualix - Admin - Anforderungen",
			"admin_categories" => "Qualix - Admin - Kategorien",
			"admin_participant_groups" => "Qualix - Admin - TN Gruppen",
			"admin_observationAssignments" => "Qualix - Admin - Beobachtungsaufträge",
			"admin_feedbacks" => "Qualix - Admin - Rückmeldungen",
		)
	),
);
